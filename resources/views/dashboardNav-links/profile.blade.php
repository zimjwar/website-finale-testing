<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelancer Profile</title>
    <style>
        /* Base Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: #f8f8f8;
            color: #333;
        }

        /* Header */
        .header {
            background: linear-gradient(90deg, #0073e6, #005bb5);
            color: white;
            padding: 2rem 0;
            text-align: center;
            font-size: 2.5rem;
            font-weight: 600;
        }

        /* Main Container */
        .container {
            width: 90%;
            max-width: 1300px;
            margin: 3rem auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            transition: all 0.3s ease;
        }

        /* Profile Header */
        .profile-header {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            margin-bottom: 2rem;
            text-align: center;
        }
        .cover-photo {
            width: 100%;
            height: 250px;
            background: url('https://via.placeholder.com/1200x300') no-repeat center center;
            background-size: cover;
            border-radius: 15px 15px 0 0;
            position: relative;
        }
        .profile-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 4px solid white;
            position: absolute;
            top: 100px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        .profile-photo:hover {
            transform: scale(1.1);
        }
        .upload-btn {
            position: absolute;
            top: 120px;
            left: 180px;
            width: 50px;
            height: 50px;
            background-color: #0073e6;
            color: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.5rem;
            cursor: pointer;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease;
        }
        .upload-btn:hover {
            background-color: #005bb5;
        }

        /* Profile Info */
        .profile-info h2 {
            margin: 1rem 0;
            font-size: 2rem;
            color: #333;
        }
        .profile-info p {
            font-size: 1.1rem;
            color: #777;
            max-width: 80%;
            margin: 0 auto;
        }

        /* Form */
        .form-group {
            margin: 1rem 0;
            position: relative;
        }
        input, textarea {
            width: 100%;
            padding: 1rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }
        input:focus, textarea:focus {
            border-color: #0073e6;
            outline: none;
        }
        textarea {
            resize: vertical;
        }

        /* Buttons */
        .btn-submit {
            background: #0073e6;
            color: white;
            padding: 1rem 3rem;
            border: none;
            border-radius: 5px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }
        .btn-submit:hover {
            background-color: #005bb5;
        }

        /* Sections */
        .profile-sections {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            margin-top: 2rem;
        }
        .section {
            background-color: #f7f7f7;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            transition: transform 0.3s ease;
        }
        .section:hover {
            transform: translateY(-10px);
        }
        .section h3 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            color: #333;
        }
        .section-content {
            margin-top: 1rem;
        }

        .file-list {
            margin-top: 1rem;
            background: #e8e8e8;
            padding: 1rem;
            border-radius: 5px;
        }
        .file-item {
            padding: 0.5rem 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .file-item button {
            background-color: #0073e6;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Footer */
        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1rem;
            margin-top: 2rem;
            border-radius: 15px 15px 0 0;
        }
    </style>
</head>
<body>
    <header class="header">
        Freelancer Profile
    </header>

    <main>
        <div class="container">
            <!-- Profile Header -->
            <div class="profile-header">
                <div class="cover-photo"></div>
                <img src="https://via.placeholder.com/150" alt="Profile Picture" class="profile-photo">
                <label for="profilePicture" class="upload-btn">+</label>
                <input type="file" id="profilePicture" accept="image/*" style="display: none;">
                <label for="coverPhoto" class="upload-btn" style="top: 200px; left: 120px;">+</label>
                <input type="file" id="coverPhoto" accept="image/*" style="display: none;">
                <div class="profile-info">
                    <h2>Your Name</h2>
                    <p>Your job title and a short bio here.</p>
                </div>
            </div>

            <!-- Profile Setup Form -->
            <form id="profileForm">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" placeholder="Enter your full name" required>
                </div>
                <div class="form-group">
                    <label for="jobTitle">Job Title:</label>
                    <input type="text" id="jobTitle" placeholder="e.g., Data Scientist" required>
                </div>
                <div class="form-group">
                    <label for="aboutMe">About Me:</label>
                    <textarea id="aboutMe" placeholder="Write a short bio about yourself..." rows="5" required></textarea>
                </div>

                <!-- Profile Sections -->
                <div class="profile-sections">
                    <div class="section">
                        <h3>Portfolio</h3>
                        <div class="section-content">
                            <textarea placeholder="Add portfolio items..." rows="4"></textarea>
                            <button onclick="addPortfolioItem()">Add Item</button>
                            <div class="file-list" id="portfolioFiles"></div>
                        </div>
                    </div>

                    <div class="section">
                        <h3>Experience</h3>
                        <div class="section-content">
                            <textarea placeholder="Describe your experience..." rows="4"></textarea>
                            <button onclick="addExperienceItem()">Add Experience</button>
                            <div class="file-list" id="experienceFiles"></div>
                        </div>
                    </div>
                </div>

                <div class="profile-sections">
                    <div class="section">
                        <h3>Certifications</h3>
                        <div class="section-content">
                            <textarea placeholder="List your certifications..." rows="3"></textarea>
                            <button onclick="addCertificationItem()">Add Certification</button>
                            <div class="file-list" id="certificationsFiles"></div>
                        </div>
                    </div>

                    <div class="section">
                        <h3>References</h3>
                        <div class="section-content">
                            <textarea placeholder="Add references..." rows="3"></textarea>
                            <button onclick="addReferenceItem()">Add Reference</button>
                            <div class="file-list" id="referencesFiles"></div>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn-submit">Save Profile</button>
            </form>
        </div>
    </main>

    <footer class="footer">
        <p>&copy; 2024 Freelancer Platform. All rights reserved.</p>
    </footer>

    <script>
        // Profile Form Submit Handler
        document.getElementById('profileForm').addEventListener('submit', function (e) {
            e.preventDefault();

            const name = document.getElementById('name').value;
            const jobTitle = document.getElementById('jobTitle').value;
            const aboutMe = document.getElementById('aboutMe').value;

            alert("Profile Saved:\n" + "Name: " + name + "\nJob Title: " + jobTitle + "\nAbout Me: " + aboutMe);
        });

        // Dynamically Add Portfolio Item
        function addPortfolioItem() {
            const portfolioFiles = document.getElementById('portfolioFiles');
            const fileItem = document.createElement('div');
            fileItem.classList.add('file-item');
            fileItem.innerHTML = 'Portfolio File: <input type="file" class="portfolio-file">';
            portfolioFiles.appendChild(fileItem);
        }

        // Dynamically Add Experience Item
        function addExperienceItem() {
            const experienceFiles = document.getElementById('experienceFiles');
            const fileItem = document.createElement('div');
            fileItem.classList.add('file-item');
            fileItem.innerHTML = 'Experience File: <input type="file" class="experience-file">';
            experienceFiles.appendChild(fileItem);
        }

        // Dynamically Add Certification Item
        function addCertificationItem() {
            const certificationsFiles = document.getElementById('certificationsFiles');
            const fileItem = document.createElement('div');
            fileItem.classList.add('file-item');
            fileItem.innerHTML = 'Certification File: <input type="file" class="certification-file">';
            certificationsFiles.appendChild(fileItem);
        }

        // Dynamically Add Reference Item
        function addReferenceItem() {
            const referencesFiles = document.getElementById('referencesFiles');
            const fileItem = document.createElement('div');
            fileItem.classList.add('file-item');
            fileItem.innerHTML = 'Reference File: <input type="file" class="reference-file">';
            referencesFiles.appendChild(fileItem);
        }
    </script>
</body>
</html>
