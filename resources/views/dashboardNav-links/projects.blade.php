<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post a Project</title>
    <style>
        /* Reset default margin and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #fbc2eb, #a6c1ee);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        header {
            background-color: #6a1b9a;
            color: white;
            text-align: center;
            padding: 15px;
            width: 100%;
            border-radius: 8px 8px 0 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 2rem;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            width: 100%;
            max-width: 600px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
        }

        h2 {
            color: #333;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group label {
            font-weight: bold;
            color: #333;
            margin-bottom: 8px;
            display: inline-block;
        }

        .form-group input, .form-group textarea, .form-group select {
            width: 100%;
            padding: 12px;
            border-radius: 6px;
            border: 2px solid #ddd;
            font-size: 16px;
            margin-top: 5px;
            background-color: #f9f9f9;
            transition: border 0.3s ease;
        }

        .form-group input:focus, .form-group textarea:focus, .form-group select:focus {
            border-color: #6a1b9a;
            outline: none;
        }

        .form-group textarea {
            resize: vertical;
        }

        .btn-submit {
            background-color: #6a1b9a;
            color: white;
            font-size: 16px;
            padding: 15px 30px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #8e24aa;
        }

        .btn-submit:active {
            background-color: #9c27b0;
        }

        .form-group select {
            background-color: #f9f9f9;
            font-size: 16px;
        }

        .form-group select option {
            padding: 10px;
        }

        .form-group input[type="number"] {
            -moz-appearance: textfield;
        }

        .form-group input[type="number"]::-webkit-outer-spin-button,
        .form-group input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>
<body>

    <header>
        <h1>Post a Project</h1>
    </header>

    <div class="container">
        <h2>Tell Us About Your Project</h2>
        <form action="/submit_project" method="POST">
            <div class="form-group">
                <label for="title">Project Title</label>
                <input type="text" id="title" name="title" placeholder="Enter project title" required>
            </div>

            <div class="form-group">
                <label for="description">Project Description</label>
                <textarea id="description" name="description" placeholder="Describe your project in detail" rows="6" required></textarea>
            </div>

            <div class="form-group">
                <label for="budget">Budget</label>
                <input type="number" id="budget" name="budget" placeholder="Enter budget" required>
            </div>

            <div class="form-group">
                <label for="deadline">Deadline</label>
                <input type="date" id="deadline" name="deadline" required>
            </div>

            <div class="form-group">
                <label for="category">Category</label>
                <select id="category" name="category" required>
                    <option value="">Select a Category</option>
                    <option value="web-development">Web Development</option>
                    <option value="graphic-design">Graphic Design</option>
                    <option value="content-writing">Content Writing</option>
                    <option value="digital-marketing">Digital Marketing</option>
                    <option value="app-development">App Development</option>
                </select>
            </div>

            <button type="submit" class="btn-submit">Post Project</button>
        </form>
    </div>

</body>
</html>
