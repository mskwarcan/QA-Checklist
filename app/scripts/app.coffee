# variables
personGroup = '.person'
howMany = ''
people = []

# functions
init = ->
  getHowManyPeopleAvailable()
  initClickEvents()
  return

getHowManyPeopleAvailable = ->
    howMany = $('#people').attr('class')
    return

removeClassesFromGroup = (group, className = 'active') ->
  $(group).each ->
    $(@).removeClass(className)
    return

addToSelection = (id) ->
    if howMany is 'single'
        people = id
    else
        people.push(id)
    return

setPerson = (obj) ->
    if howMany is 'single' then removeClassesFromGroup personGroup
    obj.addClass 'active'
    personId = obj.attr('id')
    addToSelection(personId)
    return

removePerson = (obj) ->
    obj.removeClass 'active'
    index = people.indexOf obj.attr('id')
    people.splice index, 1
    return

initClickEvents = ->
  $(personGroup).click (e) ->
    e.preventDefault()
    if howMany is 'single'
        setPerson($(@))
    else
        if $(@).hasClass 'active'
            removePerson($(@))
        else
            setPerson($(@))
    console.log people
    return

# run
$(document).ready ->
  init()
  return