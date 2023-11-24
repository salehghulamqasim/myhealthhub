

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #3498db;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        section {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: grid;
            gap: 20px;
        }

        label {
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

    </style>
</head>
<body>
    <header>
        <h1>Employee Information</h1>
    </header>

    <section>
     <form action="processForm.php" method="POST">
            <label for="EmployeeType">Employee Type:</label>
            <select id="EmployeeType" name="EmployeeType" required>
                <option value="" disabled selected>Choose your occupation</option>
                <option value="Doctor">Doctor</option>
                <option value="Staff">Nurse</option>
                <option value="Hr">Other</option>
            </select>

            <label for="username">Full Name:</label>
            <input type="text" id="username" name="username" required>

            <label for="Email">Email</label>
            <input type="Email" id="Email" name="Email" required>

            <label for="Gender">Gender:</label>
            <select id="Gender" name="Gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>

            <!-- Accepts mutliple answers by comma separated -->
            <div id="Department" class="employeeFields">
                <label for="Department">Department:</label>
                <input type="text" id="Department" name="Department" placeholder="Radiology, Cardiology, Paediatrics" title="Enter Departments, separated by commas">
            </div>
            </div>

            <!-- Accepts mutliple answers by comma separated -->
            <div id="Ability" class="employeeFields">
                <label for="Ability">Abilities:</label>
                <input type="text" id="Ability" name="Ability" placeholder="Botox, Filter" title="Enter abilities, separated by commas">
            </div>
            </div>

            <label for="Position">Position:</label>
            <select id="Position" name="Position" required>
                <option value="" disabled selected>Choose your Position</option>
                <option value="CMO">CMO</option>
                <option value="Dermatologist">Dermatologist</option>
                <option value="General_practitioner">General practitioner </option>
                <option value="other ">other</option>
            </select>

           
            <!-- Make it optional -->
            <div id="ReplacedBy" class="employeeFields">
                <label for="ReplacedBy">Replaced by (if any)</label>
                <input type="text" id="ReplacedBy" name="ReplacedBy">
            </div>

         <!-- Should accept pdf and img files  -->
            <div id="Certificates" class="employeeFields">
                <label for="Certificate">Certificates:</label>
                <input type="text" id="Certificate" name="Certificate">
                <!-- <input type="file" id="Certificate" name="Certificate" accept=".pdf, image/*"> -->
            </div>

            <!--Ask eman for further clarification -->
            <div id="Education" class="employeeFields">
                <label for="Education">Education</label>
                <input type="text" id="Education" name="Education">
            </div>

            <input type="submit" value="Submit">
        </form>
    </section>
</body>
</html>


<!-- TODO 
            1- Add another form for HR 
            2- Should take employee name, Position, ReplacedBy
            3- Employee should use above form to add his Certificate, name, Email, Ability, Education , Position also   
-->


