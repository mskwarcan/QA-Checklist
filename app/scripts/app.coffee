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
    console.log people.length
    if people.length >= 1
        changeButton 'enable'
    else
        changeButton 'disable'
    return

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
    return

removePerson = (obj) ->
    obj.removeClass 'active'
    index = people.indexOf obj.attr 'id'
    people.splice index, 1
    enableButton()
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