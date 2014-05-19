Landing Zone

This is my project landing page. It is a work-in-progress, and serves two purposes: I aim to bring everything to a centralized web-based work environment with this and generate simple TODO notes for applications.

I'm changing the names of things to feel less modular--Yes maybe it will be renamed and split up at a later point, but for now I think it makes sense to name it in order of use.
"Start Project" > "Project Queue" > "Jot a Note" > "Bug Tracker" > "Server Status"

::Database structure:: (This should be entirely JSON based)

Project
	ID
	readme
		body
		edited
			date
			author
	todo (jot)
		ID
		priority *manually set, but can also be set based on date*
		type (idea, fix, bug, style, feature, ... <= `types.json`)
		headline
		[note]
			body
			date
		submitted_date
