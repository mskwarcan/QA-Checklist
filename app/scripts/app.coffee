removeClassesFromGroup = (group, className = 'active') ->
  $(group).each ->
    $(@).removeClass(className)
    return

$(document).ready ->
  personGroup = '.person'
  $(personGroup).click (e) ->
    e.preventDefault()
    removeClassesFromGroup(personGroup)
    $(@).addClass 'active'
    return
  return