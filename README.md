### Question Bank Portal in Laravel

This aims to create a web portal to add/review Questions. Developed using Laravel.

#### Features
- Signup/Login
- Add Question(Operators)
- Review Questions(Question Reviewers)
- Manage Users(Admins)
- User Dashboard
- Display Questions

### Use

Nowadays, it is a common practice to collect/crowdsource all types of Questions for surveys, exams, quizzes, and many other purposes.
A web portal that may serve this purpose is a must for this.

### Explaination

User sign up and select a role during signup (Operator/Reviewer). Once the user has successfully signed up, Admin can activate the account in `Manage Users` Section.
Once the user account has been activated, the user can login after that.
This contains 3 roles:
- Admin
- Operator
- Question Reviewer

### Individual Roles

- *Operator*:

Operator's main role is to add Questions. Operator can add question, and can check the dashboard. 

- *Question Reviewer*:

Question Reviewer's main role is to review questions of a given topic. To review Questions, user needs to select the topic that he wants to review, and then all the unreviewed questions of that topic would come one by one for review.
Reviewer can check the number of question that he reviewed.
Reviewer can also edit the question while reviewing the question

- *Admin:*

Admin's major role is to manage the entire portal that includes:

1. Add/Modify/Delete Topics
2. Add/Modify/Delete Sub-topic
3. Activate/Deactivate User Account
4. Check individual user report(Includes total questions added/reviewed by a user etc)
