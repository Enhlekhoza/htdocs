<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Step Form with Progress Bar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        #progress-bar {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .step {
            text-align: center;
            flex-grow: 1;
            position: relative;
        }

        .bullet {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #ddd;
            display: inline-block;
            line-height: 30px;
            color: #fff;
        }

        .bullet.active {
            background-color: #000;
        }

        .step p {
            margin-top: 5px;
            font-size: 12px;
        }

        .form-step {
            display: none;
        }

        .form-step.active {
            display: block;
        }

        label {
            display: block;
            margin-bottom: 10px;
            text-align: left;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="number"],
        input[type="tel"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        input[type="checkbox"] {
            margin-right: 10px;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #000;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>

    <div class="container">
        <div id="progress-bar">
            <div class="step">
                <div class="bullet active">1</div>
                <p>Account</p>
            </div>
            <div class="step">
                <div class="bullet">2</div>
                <p>Category</p>
            </div>
            <div class="step">
                <div class="bullet">3</div>
                <p>Details</p>
            </div>
        </div>

        <form id="registration-form">
            <!-- Step 1: Account Information -->
            <div class="form-step active">
                <h2>Register</h2>
                <label for="name">Name *</label>
                <input type="text" id="name" required>

                <label for="username">Username *</label>
                <input type="text" id="username" required>

                <label for="email">Email *</label>
                <input type="email" id="email" required>

                <label for="password">Password *</label>
                <input type="password" id="password" required>

                <label for="verify-password">Verify Password *</label>
                <input type="password" id="verify-password" required>

                <label>
                    <input type="checkbox" required> I agree to consent to CEP collecting my details.
                </label>
            </div>

            <!-- Step 2: Category Selection -->
            <div class="form-step">
                <h2>Select Category</h2>
                <label>
                    <input type="radio" name="category" value="student" required> Student
                </label>
                <label>
                    <input type="radio" name="category" value="employment-seeker" required> Employment Seeker
                </label>
                <label>
                    <input type="radio" name="category" value="employed-resident" required> Employed Resident
                </label>
                <label>
                    <input type="radio" name="category" value="business-owner" required> Business Owner
                </label>
                <label>
                    <input type="radio" name="category" value="ngo-npo" required> NGO / NPO
                </label>
                <label>
                    <input type="radio" name="category" value="pensioner" required> Pensioner
                </label>
            </div>

            <!-- Step 3: Personal Details -->
            <div class="form-step">
                <h2>Enter Details</h2>
                <label for="first-name">First Name *</label>
                <input type="text" id="first-name" required>

                <label for="last-name">Last Name *</label>
                <input type="text" id="last-name" required>

                <label for="age">Age *</label>
                <input type="number" id="age" required>

                <label for="gender">Gender *</label>
                <select id="gender" required>
                    <option value="" disabled selected>Select Below</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>

                <label for="location">Location *</label>
                <select id="location" required>
                    <option value="" disabled selected>Select Below</option>
                    <option value="diepsloot">Diepsloot</option>
                    <option value="alexander">Alexander</option>
                    <option value="soweto">Soweto</option>
                </select>

                <label for="extension-diepsloot">Extension: If Diepsloot</label>
                <input type="text" id="extension-diepsloot">

                <label for="extension-alexander">Extension: If Alexander</label>
                <input type="text" id="extension-alexander">

                <label for="extension-soweto">Extension: If Soweto</label>
                <input type="text" id="extension-soweto">

                <label for="home-language">Home Language *</label>
                <select id="home-language" required>
                    <option value="" disabled selected>Select Below</option>
                    <option value="english">English</option>
                    <option value="zulu">Zulu</option>
                    <option value="xhosa">Xhosa</option>
                    <option value="sotho">Sotho</option>
                </select>

                <label for="mobile-number">Mobile Number *</label>
                <input type="tel" id="mobile-number" required>

                <label for="business-name">Business Name</label>
                <input type="text" id="business-name">

                <label for="industry">Industry *</label>
                <input type="text" id="industry" required>
            </div>

            <div class="buttons">
                <button type="button" class="prev-btn">Previous</button>
                <button type="button" class="next-btn">Next</button>
            </div>

            <div class="buttons">
                <button type="submit">Register</button>
            </div>
        </form>
    </div>

    <script>
        const steps = Array.from(document.querySelectorAll('.form-step'));
        const nextBtns = document.querySelectorAll('.next-btn');
        const prevBtns = document.querySelectorAll('.prev-btn');
        const progressBar = document.querySelectorAll('.bullet');

        let currentStep = 0;

        nextBtns.forEach(button => {
            button.addEventListener('click', () => {
                if (currentStep < steps.length - 1) {
                    steps[currentStep].classList.remove('active');
                    progressBar[currentStep].classList.remove('active');
                    currentStep++;
                    steps[currentStep].classList.add('active');
                    progressBar[currentStep].classList.add('active');
                }
            });
        });

        prevBtns.forEach(button => {
            button.addEventListener('click', () => {
                if (currentStep > 0) {
                    steps[currentStep].classList.remove('active');
                    progressBar[currentStep].classList.remove('active');
                    currentStep--;
                    steps[currentStep].classList.add('active');
                    progressBar[currentStep].classList.add('active');
                }
            });
        });

        // Hide the "Previous" button on the first step
        document.addEventListener('DOMContentLoaded', () => {
            if (currentStep === 0) {
                document.querySelector('.prev-btn').style.display = 'none';
            }

            document.querySelector('.next-btn').addEventListener('click', () => {
                if (currentStep > 0) {
                    document.querySelector('.prev-btn').style.display = 'block';
                }
                if (currentStep === steps.length - 1) {
                    document.querySelector('.next-btn').style.display = 'none';
                    document.querySelector('[type="submit"]').style.display = 'block';
                }
            });

            document.querySelector('.prev-btn').addEventListener('click', () => {
                if (currentStep === 0) {
                    document.querySelector('.prev-btn').style.display = 'none';
                }
                if (currentStep < steps.length - 1) {
                    document.querySelector('.next-btn').style.display = 'block';
                    document.querySelector('[type="submit"]').style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>
