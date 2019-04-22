[Back to Course Outline](../course-outline.md)

# Section 4 Definition: Planning for Success Part III
26. Planning for User Testing
27. Creating a Test Plan: Who Are We Testing For?
28. Prioritizing Device and Browser Support
29. What to Test: Functionality
30. What to Test: Usability
31. What to Test: Errors and Exceptions
32. What to Test: Compatibility
33. What to Test: Performance
34. What to Test: Security
35. Definition Takeaways: Things to Remember


## Section 4 - Planning for Success

Why plan testing now?

- you get additional clarity on scope
- less explaining (and argument) later
- less stress before, during, and after launch  

You can't test everything

- budgets are finite
- schedules are finite
- not every scenario matters

### Creating a Test Plan

1) identify who you're testing for?  

- what are most popular devices they'll use?
- what OS/browser is most popular?
- what connection speed?
- how tech-savvy is your demographic?

2) prioritize browser and device support

- Fully Supported
  - all content must be readable
  - all functionality must work properly
  - minimal deviation from approved UI design
- Partially Supported
  - all content must be readable
  - navigation must work
  - login functionality must degrade gracefully
  - degradation in the UI connot obscure content
- Unsupported
  - No support or testing will be performed.  

3) decide what to test (6 core types)
  - 1) **functionality**
    - a) test all links
      - internal and outgoing links
      - links that jump within single pages
      - email
      - orphan pages
    - b) test forms on all pages
      - check validations on each field
      - check default values of fields, if they exist
      - test incorrect input into form fields
      - test options to creat, delete, view, or modify forms
    - c) test cookies
      - test functionality and security by enabling/disabling cookies in browser
      - teset to ensure cookies are encrypted before writing to the user's device
      - for session-based cookies, check login sessions and user stats
    - d) test html/css validation
      - HTML syntax errors - [WC3 Markup validation service](http://validator.w3.org)
      - Crawlable? - [Google Webmaster Tools](https://www.google.com/webmasters/tools)
    - e) database connections and consistency
      - check data integrity and arrors while you edit, delete, modify forms or do any DB related functionality
      - ensure all DB queries are executing correctly
      - ensure data is retrieved correctly
      - ensure data is updated correctly
  - 2) **usability**
    - Tools: 
      - Survey Monkey
      - video recorded, moderated user sessions
      - online services such as: UserTesting, Loop11, and Optimizely
    - A) test ease and effectiveness of navigation
    - B) test usefulness of content
    - C) test effectiveness of visual presentation (UI)
    - D) test task success
      - did you accomplish task?
      - satisfied?
      - if so, what are consequences?
  - 3) **errors and exception**
  - 4) **compatibility**
    - browser compatibility
      - display consistently in diff browsers?
      - same browser but different OSs?
      - all functionality?
    - OS functionality
  - 5) **performance**
    - measures how well the website can accomodate heavy traffic
      - load testing
      - stress testing
  - 6) **security**

**Key Takeaways:**  
Need to know three things up front  
- what's worth doing?
- what are we creating?
- what value does it provide?

If you ever hear "we have no competition", walk away

The most important principle of good UI/UX is **progressive disclosure**.
Information presented to someone who isn't interested in it - or isn't ready to process it - is noise.

There are 3 kinds of requirments: things people...
- say they need
- actually need
- don't know they need

When you need to get requirements quickly, **use scenarios** are your best friend in the world.

Documentation eliminates **excuses and surprises** (which makes life good)

When it comes to interacting with clients, partners, or fellow team members - **silence equals agreement.**

If you're doing it without the list, **you're guessing** so write it down.

Be realistic about what matters most b/c you can't test everything.  
