[Back to Course Outline](../README.md)  

[< Section 3](../notes/notes-section-03.md) | [Section 5 >](../notes/notes-section-05.md)  

# Section 4 Definition: Planning for Success Part III <!-- omit in toc -->

### Table of Contents:  

- [26. Planning for User Testing](#26-planning-for-user-testing)
- [27. Creating a Test Plan: Who Are We Testing For?](#27-creating-a-test-plan-who-are-we-testing-for)
- [28. Prioritizing Device and Browser Support](#28-prioritizing-device-and-browser-support)
- [29. What to Test: Functionality (1/6)](#29-what-to-test-functionality-16)
- [30. What to Test: Usability (2/6)](#30-what-to-test-usability-26)
  - [Tools for testing:](#tools-for-testing)
  - [Things to test for:](#things-to-test-for)
- [31. What to Test: Errors and Exceptions (3/6)](#31-what-to-test-errors-and-exceptions-36)
- [32. What to Test: Compatibility (4/6)](#32-what-to-test-compatibility-46)
- [33. What to Test: Performance (5/6)](#33-what-to-test-performance-56)
- [34. What to Test: Security (6/6)](#34-what-to-test-security-66)
- [35. Definition Takeaways: Things to Remember](#35-definition-takeaways-things-to-remember)

_____  

# 26. Planning for User Testing

Why plan testing now?

- you get additional clarity on scope
- less explaining (and argument) later
- less stress before, during, and after launch  

You can't test everything

- budgets are finite
- schedules are finite
- not every scenario matters
  - e.g. top 5 browsers

# 27. Creating a Test Plan: Who Are We Testing For?

Questions for identifying who you're testing for:

- what are most popular devices they'll use?
- what OS/browser is most popular?
- what connection speed?
- how tech-savvy is your demographic?

Check out sites such as:

- W3 Schools
- Net Market Share
- Stat Counter

# 28. Prioritizing Device and Browser Support

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

# 29. What to Test: Functionality (1/6)

- Test all links
  - internal and outgoing links
  - links that jump within single pages
  - email
  - orphan pages
- Test forms on all pages
  - check validations on each field
  - check default values of fields, if they exist
  - test incorrect input into form fields
  - test options to creat, delete, view, or modify forms
- Test cookies
  - test functionality and security by enabling/disabling cookies in browser
  - teset to ensure cookies are encrypted before writing to the user's device
  - for session-based cookies, check login sessions and user stats
- Test html/css validation
  - HTML syntax errors - [WC3 Markup validation service](http://validator.w3.org)
  - Crawlable? - [Google Webmaster Tools](https://www.google.com/webmasters/tools)
- Database connections and consistency
  - check data integrity and arrors while you edit, delete, modify forms or do any DB related functionality
  - ensure all DB queries are executing correctly
  - ensure data is retrieved correctly
  - ensure data is updated correctly

# 30. What to Test: Usability (2/6)

## Tools for testing: 

  - Survey Monkey
  - video recorded, moderated user sessions
  - online services such as: UserTesting, Loop11, and Optimizely

## Things to test for:

- Ease and effectiveness of navigation
  - do users find what they need easily?
  - how long does it take them to find what they're looking for?
  - does the structure and org of navigation match the user's expectation?
  - are links labeled with terms that make sense to users?
- Usefulness of content
  - does content match what users want or need?
  - can users find and read the content they need?
  - do they understand the content?
  - can they act on the content?
- Effectiveness of visual presentation (UI)
  - do UI elements clearly separate navigation from content?
  - do UI elements distract or create a barrier between the user and the content?
  - do UI elements clearly signal what can be acted upon or interacted with - and how to do so?
  - do UI elements work together to guide the user through a particular process or task flow?
- Task success  
  - were users able to accomplish the key task they came to the site to perform?
  - if so, did they feel satisfied - or angry and frustrated?
  - if not, what prevented them from succeeding?
  - what's the consequence of each task failure - lost customers, increased support costs, inaccurate data captured?

# 31. What to Test: Errors and Exceptions (3/6)

# 32. What to Test: Compatibility (4/6)

- browser compatibility
  - display consistently in diff browsers?
  - same browser but different OSs?
  - all functionality?
- OS functionality


# 33. What to Test: Performance (5/6)

- measures how well the website can accomodate heavy traffic
  - load testing
  - stress testing

# 34. What to Test: Security (6/6)

# 35. Definition Takeaways: Things to Remember

**Key Takeaways:**  
Need to know three things up front  
- what's worth doing?
- what are we creating?
- what value does it provide?


[Table of Contents](#Table-of-Contents:)  

[Back to Course Outline](../README.md)  

[< Section 3](../notes/notes-section-03.md) | [Section 5 >](../notes/notes-section-05.md)  
