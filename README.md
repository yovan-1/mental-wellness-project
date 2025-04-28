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


Cyclomatic Complexity Calculation in Mental Health Assessment

Overview
This module calculates Cyclomatic Complexity by measuring the number of independent paths through a function. The assessMentalHealth() function evaluates a user's mental health score and categorizes the result based on predefined thresholds.
Helps prevent accidental form submissions with missing fields.
Can be extended with stronger validation (e.g., regex for email format, password strength checks).
 Benefits of Measurement Validation in Authentication
 Improves user experience by providing instant feedback.
 Reduces server errors by catching invalid inputs before submission.
 Enhances security by ensuring structured and complete login credentials.


Added a code for measurement validation in the tools.php page.
Description
This code provides a simple HTML form where users can input their stress level on a scale of 1 to 10. It includes basic form validation using JavaScript to ensure users enter a valid number within the specified range.

How It Works
The form displays a label and an input field where users can enter their stress level.
The input field is restricted to values between 1 and 10 using the min and max attributes.
When the user clicks the Submit button:
A JavaScript function checks whether the entered value is within the allowed range.
If the value is invalid, an alert message prompts the user to correct it, and the form submission is prevented.



Software Structural Measurement

This measures complexity in control-flow, data flow, and data structure.

In the code of db.php file i implemented the structural measurement using  a function called `executeQueryWithLogging` that does the following,

1. Measures the execution time of SQL queries made to the database.
2. Logs the execution time using the `error_log` function.

In our Mental Health and Wellness Project this code i have implemented does the folkowing changes,

1. Monitoring database performance: By logging query execution times, you can identify slow-running queries that may impact user experience.
2. Optimizing database queries:This is achieved by analyzing logged execution times, you can optimize database queries to improve response times and overall application performance.
3. Ensuring data-driven insights: By optimizing database query performance, you can ensure that your application provides accurate and timely insights to support mental health and wellness.

   DETAILS TO THE COHESION CODE I ADDED IN THE db file
   High Cohesion in Database Operations
In the Mental Wellness Monitoring and Self-Care Recommendation System, maintaining a well-structured and modular codebase is essential for scalability, maintainability, and readability. To achieve this, we apply the High Cohesion principle in our database operations, ensuring that each function performs a single, well-defined task.

Why This Matters?

1. Clear Function Responsibilities – Each function focuses on a specific task, reducing complexity and making the code easier to understand.

2. Code Reusability – Instead of writing the same queries in multiple places, these functions can be reused throughout the system, improving efficiency.

3. Easier Debugging and Maintenance – Changes to data retrieval logic (e.g., adding filters or modifying queries) can be done in one place, minimizing errors.

4. Better Scalability – As the system grows, adding more database-related functions (e.g., searching users, filtering by role) is straightforward without disrupting existing code.



Relevance to Our System
Our system includes features such as user profiles, therapist interactions, self-care tracking, and community discussions. These functions help in:

• Retrieving all users (for admin dashboards, therapist management, and community engagement).

• Fetching a specific user (for personalized recommendations, tracking user progress, and support interactions).

description for the signup with logging feature added to the sign up page

This function models a Control Flow Graph (CFG) by logging each step in the signup validation process. It helps track the flow of execution, ensuring that all possible paths (valid and invalid inputs) are accounted for.

The importance of this

Models program logic visually: Each decision point (if conditions) creates a new path in the flow graph.
Enhances debugging: Logs errors like invalid email format and mismatched passwords.
Improves maintainability: Developers can analyze the flow of validation logic without manually testing all cases.

How it works:

1. Logs when validation starts

2. Checks if the email is valid

3. Checks if the passwords match

4. Logs success if validation passes
This helps track control flow complexity and ensures better software structural measurement in the project.
Alright — when you implement that function in your code, here’s exactly what happens:

1. You call uploadFileToDB($fileName, $filePath, $conn) somewhere in your PHP script.

2. PHP runs the uploadFileToDB function:

It takes the filename (like profile.png), the filepath (like /uploads/profile.png), and the database connection ($conn) you gave it.

3. Inside the function:

It prepares an SQL command that inserts this information into your database safely (using a prepared statement to prevent SQL injection).

4. It binds the actual values of $fileName and $filePath to the SQL.

5. It executes the SQL command:

If successful: it adds a new row in your files table — with the file name and file path.

If it fails: nothing is added, and it returns false.
6. You get a result:

$fileSaved becomes true if it worked, or false if it didn’t.

You can then check it to see if you need to show an error message or success message.

Visually, your database table files will now have a new row like: | id | name        | path                 | |----|-------------|----------------------| | 1  | profile.png | /uploads/profile.png  |

Finally 

> It saves the file's name and path into your database automatically whenever you upload a file, and tells you if it succeeded or not.

