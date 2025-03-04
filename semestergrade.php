<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semester Grade Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 500px;
            margin: auto;
            padding: 20px;
            background-color: #212529;
            color: #f8f9fa;
            transition: background-color 0.3s, color 0.3s;
        }
        label, input {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background: #0056b3;
        }
        .dark-mode {
            background-color: #f8f9fa;
            color: #212529;
        }
        .dark-mode input {
            background-color: #ffffff;
            color: #212529;
            border: 1px solid #212529;
        }
    </style>
</head>
<body>
    <button onclick="toggleDarkMode()">Toggle Dark Mode</button>
    <h2>Semester Grade Calculator</h2>
    
    <h3>Prelim</h3>
    <label>Assignment: (100)<input type="number" id="prelim_assignment"></label>
    <label>Quiz: (200)<input type="number" id="prelim_quiz"></label>
    <label>Seatwork: (125)<input type="number" id="prelim_seatwork"></label>
    <label>Participation: (20)<input type="number" id="prelim_participation"></label>
    <label>Projects: (115)<input type="number" id="prelim_projects"></label>
    <label>Lab Exercises: (400)<input type="number" id="prelim_lab"></label>
    <label>Written Exam: (100)<input type="number" id="prelim_exam"></label>
    <label>Prelim Grade: <input type="text" id="prelim_grade" readonly></label>
    
    <h3>Midterm</h3>
    <label>Assignment: (100)<input type="number" id="midterm_assignment"></label>
    <label>Quiz: (200)<input type="number" id="midterm_quiz"></label>
    <label>Seatwork: (125)<input type="number" id="midterm_seatwork"></label>
    <label>Participation: (20)<input type="number" id="midterm_participation"></label>
    <label>Projects: (115)<input type="number" id="midterm_projects"></label>
    <label>Lab Exercises: (400)<input type="number" id="midterm_lab"></label>
    <label>Written Exam: (100)<input type="number" id="midterm_exam"></label>
    <label>Midterm Grade: <input type="text" id="midterm_grade" readonly></label>
    
    <h3>Endterm</h3>
    <label>Assignment: (100)<input type="number" id="endterm_assignment"></label>
    <label>Quiz: (200)<input type="number" id="endterm_quiz"></label>
    <label>Seatwork: (125)<input type="number" id="endterm_seatwork"></label>
    <label>Participation: (20)<input type="number" id="endterm_participation"></label>
    <label>Projects: (115)<input type="number" id="endterm_projects"></label>
    <label>Lab Exercises: (400)<input type="number" id="endterm_lab"></label>
    <label>Written Exam: (100)<input type="number" id="endterm_exam"></label>
    <label>Endterm Grade: <input type="text" id="endterm_grade" readonly></label>
    
    <button onclick="calculateGrades()">Calculate Grades</button>
    <h3>Total Grade: <input type="text" id="total_grade" readonly></h3>
    
    <script>
        function computeGrade(assign, quiz, seatwork, participation, projects, lab, exam) {
            let classStanding = ((assign + quiz + seatwork + participation) / 4) * 0.2;
            let taskPerformance = ((projects + lab) / 2) * 0.3;
            let examScore = (exam / 100) * 0.5;
            return classStanding + taskPerformance + examScore;
        }
        
        function calculateGrades() {
            let prelim = computeGrade(
                parseFloat(document.getElementById('prelim_assignment').value) || 0,
                parseFloat(document.getElementById('prelim_quiz').value) || 0,
                parseFloat(document.getElementById('prelim_seatwork').value) || 0,
                parseFloat(document.getElementById('prelim_participation').value) || 0,
                parseFloat(document.getElementById('prelim_projects').value) || 0,
                parseFloat(document.getElementById('prelim_lab').value) || 0,
                parseFloat(document.getElementById('prelim_exam').value) || 0
            );
            document.getElementById('prelim_grade').value = prelim.toFixed(2);

            let midterm = computeGrade(
                parseFloat(document.getElementById('midterm_assignment').value) || 0,
                parseFloat(document.getElementById('midterm_quiz').value) || 0,
                parseFloat(document.getElementById('midterm_seatwork').value) || 0,
                parseFloat(document.getElementById('midterm_participation').value) || 0,
                parseFloat(document.getElementById('midterm_projects').value) || 0,
                parseFloat(document.getElementById('midterm_lab').value) || 0,
                parseFloat(document.getElementById('midterm_exam').value) || 0
            );
            document.getElementById('midterm_grade').value = midterm.toFixed(2);

            let endterm = computeGrade(
                parseFloat(document.getElementById('endterm_assignment').value) || 0,
                parseFloat(document.getElementById('endterm_quiz').value) || 0,
                parseFloat(document.getElementById('endterm_seatwork').value) || 0,
                parseFloat(document.getElementById('endterm_participation').value) || 0,
                parseFloat(document.getElementById('endterm_projects').value) || 0,
                parseFloat(document.getElementById('endterm_lab').value) || 0,
                parseFloat(document.getElementById('endterm_exam').value) || 0
            );
            document.getElementById('endterm_grade').value = endterm.toFixed(2);

            let totalGrade = (prelim * 0.3) + (midterm * 0.3) + (endterm * 0.4);
            document.getElementById('total_grade').value = totalGrade.toFixed(2);
        }

        function toggleDarkMode() {
            document.body.classList.toggle('dark-mode');
        }
    </script>
</body>
</html>