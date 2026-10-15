# WEB-250 — Debugging Setup

**This README is your graded debugging notebook.** Complete the TODOs below with your **own** observations after using VS Code + Xdebug. Do not paste `phpinfo()` output or anything confidential.

## Local setup

- Operating system and local server (Mac/MAMP or Windows/XAMPP): MAC/XAMPP
- PHP version shown in the **browser's phpinfo**: 8.2.4
- Xdebug version: 3.5.3
- Active `php.ini` path (no secrets): /Applications/XAMPP/xamppfiles/etc/php.ini
- Xdebug / VS Code port (recommended 9003): 9003
- Local Apache port (our class uses 55000): 80 in my usual XAMPP setup confirmed current setup good with instructor
- Mac/MAMP FastCGI `-idle-timeout 600` configured? (Windows: N/A): N/A — using XAMPP, not MAMP
- Mac/MAMP 45-second breakpoint pause, Step Over, Continue test result (Windows: N/A): N/A — using XAMPP, not MAMP
- Local exercise index URL: http://localhost/web250/debugging_setup/index.php
- Hosted exercise index URL: http://maryaclark.net/web250/debugging_setup/index.php

## Exercise 01 — Variables and Watch

- Prediction for `$observations` before the `+=` line: 3
- Value before Step Over: 3
- Value after Step Over: 5
- What you learned about the breakpoint and Watch: The breakpoint paused execution before the statement ran. Watch showed the current value of $observations, and step over executed the statement so I could see the value change from 3 to 5.
- Screenshot: `evidence/01_variables.png` — Shows the breakpoint and the $observations value before and after step over.

## Exercise 02 — Loop and conditional breakpoint

- Predicted total and average: 10 2.50 per day
- `$total` after the first two iterations: 6
- Values seen when `$dayIndex === 2` (index, count, total): $dayIndex = 2, $count = 1, $total = 6
- Why the conditional breakpoint helped: The third count had not yet been added. It paused execution only when $dayIndex === 2, allowing me to inspect the variables before the third count was added without stopping on every iteration
- Screenshot: `evidence/02_conditional.png` — Shows the conditional breakpoint and the values of $dayIndex, $count, and $total.

## Exercise 03 — Step Into / Step Out / Call Stack

- Predicted output: Eastern Towhee: 2 sightings
- Which function called `formatObservation()`?: describeBird() 
- What Step Into showed that Step Over would skip: Step into entered describeBird() and then entered formatObservation(), allowing me to see how the nested function was called and executed. Step over would have executed the function call without opening its code.
- Where Step Out returned you: returned from formatObservation() to describeBird(), then returned to the main PHP script.
- Screenshot: `evidence/03_call_stack.png` — Shows the debugger paused inside formatObservation() with the Call Stack displaying formatObservation, describeBird, and the main PHP script.

## Exercise 04 — Find and fix the bug

- Original incorrect browser output: Birds counted: 4
- Values you observed while stepping through the loop: 
- Iteration 1: count = 2, total before = 0 total after 2
- Iteration 2: count = 3, total before = 2 total after 3
- Iteration 3: count = 4, total before = 3 total after 4

- Original error and minimal correction (in your words):t he original code used $total = $count;, which replaced the running total with the current count instead of adding to it. I changed the line to $total += $count
- Corrected output: Birds counted: 9
- Why PHP did not raise an exception: Statement was valid PHP syntax and values. It performed an incorrect calculation, which is a logic error rather than a syntax error or exception.
- Screenshot: `evidence/04_fixed_bug.png` — Shows the corrected addition assignment and the final output, Birds counted: 9.

## How to view this project

- Local: Open `web250/debugging_setup/index.php` through your MAMP/XAMPP browser URL.
- Webhost: Open the course index and follow the Debugging Setup link.
- GitHub: Link to this folder on `main` in the Moodle Comments area.

**Safety reminder:** Never commit or deploy `php.ini`, `_local_phpinfo.php`, credentials, or logs. The project-level `.vscode/launch.json`, this README, and evidence screenshots belong on **GitHub** but **not** on the public webhost. Never activate Xdebug on your public web host.
