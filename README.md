This is our read me file.


Explanation to the code i added for QGM in the GoalSetting.php
 Concept: Goal-Question-Metric (GQM) Approach
The Goal-Question-Metric (GQM) model is used to define, evaluate, and measure the effectiveness of mental health goals within the Mental Wellness Monitoring and Self-Care Recommendation System.

 How GQM is Implemented in the System
 Goal

Users set a mental health goal, such as "Reduce stress" or "Improve sleep habits".
A timeline is assigned (e.g., 1 week, 1 month, 3 months).
 Question

The system asks: “Is the user making progress toward their goal?”
This is answered through mood tracking trends, self-assessments, and user feedback.
Metric

Mood Scores: Tracking mood changes over time.
Goal Completion Status: Whether the user met their goal within the set timeline.
User Engagement: How often users interact with the system to update their progress.


Description to the code for measaurement validation i added in the log in page 

Concept: Measurement Validation (Input Validation)
The Login Page applies Measurement Validation through input validation to ensure data accuracy, security, and a smooth user experience.

 How Measurement Validation is Implemented
 Prevents Empty Inputs

Users must enter both email and password before submitting the form.
If either field is empty, an alert notifies the user, and submission is blocked.
 Ensures Data Consistency

Only valid inputs are processed, reducing invalid login attempts.
This prevents users from submitting partial or incorrect data.
 Enhances Security

Helps prevent accidental form submissions with missing fields.
Can be extended with stronger validation (e.g., regex for email format, password strength checks).
 Benefits of Measurement Validation in Authentication
 Improves user experience by providing instant feedback.
 Reduces server errors by catching invalid inputs before submission.
 Enhances security by ensuring structured and complete login credentials.
