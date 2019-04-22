# Notes  

## Introduction:

### 4 distinct phases  

- Definition = why are we doing this?
- Architecture = what content is needed?
- Design = what UI is appropriate?
- Development = how do we build it?

## Sections 1-3  

**User Research** (does not have to be formal, just ask questions)

Putting people first by asking:

- what they expect to do
- why that matters to them
- what other goals they have
- what other tools they use  

### identifying user needs

There are 2 general groups of app users: B2B and B2C  

**B2B:**

- ask what **process** they use not which **tools** they use.
- ask open-ended, non-leading questions
  - "what constitutes a good workday for you?"
  - "How do you go about doing _______?"
  - "how does this process compare with other orgs you've worked for?"
  - "what are the biggest probs, obstacles, or inefficiencies you deal with in this process?"
  - "can you tell me about any/all other systems, websites, or apps you use during the day?"

**B2C:**

- don't **solve** problems
- don't **suggest solutions**
- don't **give advice**
Patience is extremely important here; let the silence following the question do the heavy lifting and repress the urge to fill it with your own voice.
- "what task would you put off as long as you possibly can on a site like this?"
- "what things frustrate you most?"
- "how often do you use sites like this?"
- "what do you use them for most often?"
- "can you show me how you do that?"
- "what other things do you do before, during, or after you use the site?"
- "is ther a site that does something similar that you know of?"

Decision Paths:

- percieve need
- identify options
- narrow choices
- choose one
- service after sale

### Progressive Disclosure

The most important principle of good UI/UX is **progressive disclosure**.  
Information presented to someone who isn't _interested_ in it - or isn't ready to _process_ it - is **noise**.  

![decision-path-example.png](../img/decision-path-example.png)
![progressive-disclosure.png](../img/progressive-disclosure.png)

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


## Section 5 - Architecture: Creating a Solid Foundation
### 36 Information Architecture: Organizing Content and Flow
4 Components (Rosenfeld and Morville)
1) Organizational structure
2) Labeling systems
3) Navigation systems
4) Search systems  

### 37. What IS Information Architecture (IA)?  
IA means consciously organizing the content and flow of a website, app or system.  
That organization should be meaningful, which means it's based on what you know about the people using the site.  
In particular, what their **preconceptions** and **expectations** are.  

IA then, is based on: 
- how content will be organized
- what content will be called (labeling)
- what and how much they expect to find
- how they expect to be able to move through it
- how they expect to be able to view, enter, download,, manipulate, or interact with it

[The Polar Bear Book by Rosenfeld and Morville](https://www.amazon.com/dp/1491911689/ref=cm_sw_em_r_mt_dp_U_4VWpCb4R4SJBD)
1) Organizational structure
2) Labeling systems
3) Navigation systems
4) Search systems

IA isn't just relegated to websites. Think about grocery stores or Target

IA vs Site map?
IA is a strategy for categorizing, organizing, prioritizing, and linking content based on user expectations/needs and business goals.
Site map is a visual representation that illustrates this strategy.


### 38. Content Strategy: Identifying, Organizing and Delivering
Content should always be strategically leveraged to serve a goal.

Takeaway:
Content has to be relevant, appropriate, and useful

**Relevant**
- is it relevant to our reason for being?
- reason people have come to our site?
- will they identify with it?
- will it encourage them to take the intended action?

**Appropriate**
- consitent with message everywhere else?
- consistent theme and tone of voice?
- style appropriate both for the business and audience? casual vs. formal?
- telling the truth

**Useful**
- useful, valuable, or meaningful
- happy talk? "we are a leading provider of blah, blah, blah..."
- is it all about you or them?
- is it answering the question: "what's in it for me?"

### 39. Determining Content Requirements  
Who's going to create content?  
Who's going to edit and/or approve it?  
Who's going to manage and update it?  
What are our competitors doing?  
Will people think this is useful and valuable?  
How will they find all of this content?  
How many different kinds of are there?  
Where does this fit in our established IA?  
How will we display all of this?  
Are there form factor restrictions?  

### 40. Exercise: Identifying Content Workflows  
1) Talk to content stakeholders
   - You ask questions, they answer. You diagram and ask additional questions as the conversation takes place.  
   - Ask them to describe their current process for creating and publishing content.  
   - Ask them what's working and what isn't.  
   - Ask them which people - in what roles - are involved in content creatiion, editing, and approval.  

![](../img/identifying-content-workflows_01.png)  

2) Define tasks and activities
   - Adding text, photos, video, Twitter feeds, forms, etc.
   - Creating new pages
   - Deleting pages and digital assets
   - Adding or updating metadata
   - Publishing content to a test server
   - Returning new or edited content with comments for revisions
   - Scheduling content for publication
   - Formatting headers, tables, captions, links, etc.

3) Diagram the process  
![](../img/identifying-content-workflows_02.png)  

4) Ask questions as you diagram  
  - Can authors creat new pages or just edit existing ones?
  - Who is authorized to create subfolders (subdirectories)?
  - Can authors delete pages? What about other digital assets like photos, videos, etc.?
  - Can editors approve content across the entire site or just the sections they're responsible for?
  - What about content they own that spreads across multiple sections of the site?  
  - How dow we manage multiple approvers (editors)? Are requests for approval delegated to other approvers if an assigned editor is out of the office?
  - How do we manage workflow when multiple authors are working on the same page? (GIT, checkout process, Google Docs).
  - Are content managers involved in the work flow process? Are they informed about publishing updates? Are they repsonsible for dcoumenting changes in the system somewhere?




### 41. My Tips for Successful Information IA Modeling
### 42. Creating and Prioritizing IA
### 43. Content Labeling
### 44. File Naming
### 45. Grouping and Classifying Content
### 46. Exercise: Determining Information Priority