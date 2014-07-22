Landing Zone is a work-flow management system for projects and their dependencies; it is a work-in-progress, and serves two purposes: organize projects into a centralized web-based work environment, and generate and track notes and documents for those projects.

The project itself is sectioned off into many different aspects, focusing on productivity. These sections are named Queued, Jot, Lucent, Bugger, and Logger.

Starting with the 'user_panel', which contains all user information, and is also the newest addition to the project, the information contained here pertains to user configurations and settings along with a login system. It is fairly simple, though at this time there is insufficient information to be contained within the 'settings' dropdown. Customers for a given user or project is one possible source for such information. The 'user_panel' has been taken from the unused Customer Loan Database system.

The footer is completely useless at this point, but it gives the page a proper weight, along with a sleek and modern Windows 98 feel...

The bulk of the page consists of the 'panel' (a linked list of pages, scripts, and database locations), and 'pages' (a container the dynamic content); where 'pages' is broken further down into 'header' (titles and dates, along with personal links, populate this area) and 'body' (the container for the controller and view for the projects); then 'body' is broken down further into 'body_panel' (the right panel which houses the dynamic links [controller]), and 'home' (the view-port for 'body_panel's links to be loaded into [model]).

'home' is where all processing takes place, and pages get exchanged for one-another; Queued is the default for this section.

Queued is a gnarled beast; in minimal detail it accepts a nested set of JSON objects, cycles through a series of projects and associated documentations and todos with their attached sets of notes, dates, and priorities. The controllers for this information is very compact, albeit clunky.

Jot is the entry method for Queued projects, it is not developed yet, but will function in much the way Queued is displayed; but allowing for more mutable options, like adjusting for automatic or manual priorities, setting up document types, giving user permissions, and so-forth.

Lucent pulls a server listing from a JSON file and pings each URL or IP, checking for connection. A name and description, along with optional information, such as hosted services, are also displayed along with the server status.

Bugger works with Queued to keep track of each project, but works in a different manner, showing bug related priorities, types, and notes, allowing for in-depth bug tracking.

Logger keeps track of the entire system, kind of as the start of the eventual API that will be put into effect. A single function with multiple parameters will keep track and place information all into a singular or modular log depending on that project's needs. A simple version of this log can be viewed in the current Inventory Database system.