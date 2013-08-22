QA-Checklist
============

Dynamic and project-based checklist for quality assurance. Going to have to roll PHP since Basecamp won't allow us to use AJAX to send requests easily.

To Do:
============
* Try to create the to do items in a single REST request, not many to possibly improve performance
* Create a settings panel that pulls in every person in the Basecamp Person list, and you can select who is an AE, PM, Lead Developer, and Developer. That way we can still use the Person API and not have to have a local storage. It'll also help with new people getting hired or when people get shifted to different roles and we don't need to manually update the code.
* Disable the "Create" button when you finally click submit and it's creating the tasks, etc
* Add in a preloader after it starts creating everything to indicate it's doing something
* Possibly create this for Traditional creative projects as well and start off by asking if this is a Creative or Digital QA list