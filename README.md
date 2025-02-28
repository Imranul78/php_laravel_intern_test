# 🚀 Software Engineer Intern (PHP Laravel) - Coding Test

## 📌 Instructions
- Clone this repository.
- Complete the coding tasks below.
- Push your code to a **new branch** (e.g., `candidate-name`).
- Submit a **pull request (PR)** for review.

---

## 📌 Task 1: Laravel Command - Birthday Notification 🎂
Create a Laravel command that checks for employees' birthdays and sends an email notification.

**Requirements:**
- Use the `employees` table (`id`, `name`, `email`, `date_of_birth`).
- The command should be named `SendBirthdayNotification`.
- It should run daily via a Laravel scheduler.
- Use Laravel's **Mail** system to send the email.

---

## 📌 Task 2: Model & Database Relationship 🏢
You are building an **Employee Management System**. Create the necessary Laravel **models** and **migrations** for:

- **Company** (id, name, created_at, updated_at)
- **Employee** (id, name, email, company_id, created_at, updated_at)
- **Department** (id, name, company_id, created_at, updated_at)

### **Relationships:**
✅ A Company has many Employees.  
✅ An Employee belongs to one Company.  
✅ A Company has many Departments.  
✅ A Department belongs to one Company.  

---

## 📌 Task 3: API Development 🌐
Create an API endpoint to add an employee.

- **Route:** `POST /api/employees`
- **Request Payload:**
  ```json
  {
    "name": "John Doe",
    "email": "john@example.com",
    "company_id": 1
  }

---

## 📌 Task 4: Debugging & Optimization ⚡
You're given this query:

$employees = Employee::where('status', 'active')->get();

Problem:
This query is slow when the employees table has 1,000,000+ rows.

Question:
What are the possible performance issues?
How would you optimize this query?

---

## 📌 Task 5: Logical Thinking 🧠
Write a PHP function to check if a string is a valid palindrome (ignoring spaces, punctuation, and case sensitivity).

Example:
isPalindrome("A man, a plan, a canal, Panama!"); // true
isPalindrome("Hello"); // false

---

## 📌 Submission
Complete all tasks and push your code.
Submit a Pull Request (PR) with your branch name.
We will review your code and provide feedback.
📩 For any questions, contact us at [submit@credencegroupbd.com, oubaida.credence@gmail.com].














Task 4: Debugging & Optimization Solution

The query is slow when the employees table has over 1,000,000 rows.

Possible Performance Issues:

The most likely performance issue is that the status column is not indexed. When filtering a large dataset, a lack of indexing on the filtering column (status) results in a full table scan, which can be slow for large tables.  (Solved)


Task 5: Palindrome Checker

In this task, you need to write a PHP function that checks if a given string is a palindrome. A palindrome is a sequence of characters that reads the same forwards and backwards, ignoring spaces, punctuation, and case sensitivity.

For example:
"A man, a plan, a canal, Panama!" → true (It’s a palindrome!)
"Hello" → false (It’s not a palindrome)

Solve:
Normalize the String:
Convert the string to lowercase to ignore case sensitivity.
Remove all non-alphanumeric characters (like spaces, commas, periods, etc.).
Check if the String is the Same Backwards:
Reverse the normalized string and compare it with the original normalized string. If they match, it’s a palindrome.