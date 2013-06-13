# variables
personGroup = '.person'
howMany = ''
people = []

# functions
init = ->
    getHowManyPeopleAvailable()
    initClickEvents()
    changeButton 'disable'
    return

changeButton = (state) ->
    btn = '#submit'
    if state is 'disable'
        $(btn).attr 'disabled', 'disabled'
    else
        $(btn).removeAttr 'disabled'
    return

enableButton = ->
    if people.length >= 1
        changeButton 'enable'
    else
        changeButton 'disable'
    return

setHiddenValue = ->
    $('#peopleList').val JSON.stringify(people)

getHowManyPeopleAvailable = ->
    howMany = $('#people').attr 'class'
    return

removeClassesFromGroup = (group, className = 'active') ->
  $(group).each ->
    $(@).removeClass className
    return

addToSelection = (id) ->
    if howMany is 'single'
        people = id
    else
        people.push id
    enableButton()
    setHiddenValue()
    return

removePerson = (obj) ->
    obj.removeClass 'active'
    index = people.indexOf obj.attr 'id'
    people.splice index, 1
    enableButton()
    setHiddenValue()
    return

setPerson = (obj) ->
    if howMany is 'single' then removeClassesFromGroup personGroup
    obj.addClass 'active'
    personId = obj.attr 'id'
    addToSelection personId
    return

initClickEvents = ->
  $(personGroup).click (e) ->
    e.preventDefault()
    if howMany is 'single'
        setPerson $(@)
    else
        if $(@).hasClass 'active'
            removePerson $(@)
        else
            setPerson $(@)
    return

# run
$(document).ready ->
    init()
    return