<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Student Dashboard | Alpha Maths Institute</title>

<link rel="stylesheet" href="style.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>

.dashboard-header{
background:#083d77;
color:white;
padding:25px;
text-align:center;
margin-top:90px;
}

.dashboard-grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(320px,1fr));
gap:25px;
padding:40px 8%;
}

.dashboard-card{
background:white;
padding:25px;
border-radius:15px;
box-shadow:0 5px 15px rgba(0,0,0,.1);
}

.dashboard-card h2{
color:#083d77;
margin-bottom:15px;
}

.status{
font-size:20px;
font-weight:bold;
color:green;
}

.logout{
display:inline-block;
margin-top:25px;
background:#c62828;
padding:12px 30px;
border-radius:30px;
color:white;
text-decoration:none;
}

.download{
display:inline-block;
margin-top:15px;
background:#083d77;
padding:10px 20px;
border-radius:25px;
color:white;
text-decoration:none;
}

table{
width:100%;
border-collapse:collapse;
}

table th,
table td{
padding:12px;
border:1px solid #ddd;
text-align:left;
}

table th{
background:#083d77;
color:white;
}

.notice{
background:#fff3cd;
padding:15px;
border-radius:10px;
margin-top:10px;
}

</style>

</head>

<body>

<header>

<div class="logo">

<img src="logo.jpg">

<div>

Alpha Maths Institute

</div>

</div>

<nav>

<a href="index.html">Home</a>

<a href="student-login.html">Logout</a>

</nav>

</header>

<div class="dashboard-header">

<h1>Welcome, Student</h1>

<p>Your Alpha Maths Institute Student Portal</p>

</div>

<div class="dashboard-grid">

<div class="dashboard-card">

<h2>Profile</h2>

<p><strong>Name:</strong> Student Name</p>

<p><strong>Email:</strong> student@email.com</p>

<p><strong>Username:</strong> student01</p>

<p><strong>Grade:</strong> Grade 12</p>

</div>

<div class="dashboard-card">

<h2>Application Status</h2>

<p class="status">Under Review</p>

</div>

<div class="dashboard-card">

<h2>Session Information</h2>

<p><strong>Session Type:</strong> One-on-One</p>

<p><strong>Tutor:</strong> Alpha Maths Institute</p>

<p><strong>Next Lesson:</strong> Saturday 09:00 AM</p>

</div>

<div class="dashboard-card">

<h2>Academic Results</h2>

<table>

<tr>

<th>Subject</th>

<th>Percentage</th>

</tr>

<tr>

<td>Mathematics</td>

<td>85%</td>

</tr>

<tr>

<td>Physical Science</td>

<td>79%</td>

</tr>

</table>

</div>

<div class="dashboard-card">

<h2>Uploaded Documents</h2>

<p>✔ Mathematics Results</p>

<p>✔ Physical Science Results</p>

<p>✔ Proof of Payment</p>

<a href="#" class="download">

Download Submitted Files

</a>

</div>

<div class="dashboard-card">

<h2>Announcements</h2>

<div class="notice">

Winter Classes begin on 7 July.

</div>

<div class="notice">

Bring your calculator and workbook.

</div>

</div>

<div class="dashboard-card">

<h2>Messages</h2>

<p>

Welcome to Alpha Maths Institute.

Your registration has been received successfully.

</p>

</div>

<div class="dashboard-card">

<h2>Study Resources</h2>

<a href="https://drive.google.com/drive/folders/1vgSrWDiMndlvVxoygjtpJiWsMoFBoAXB"
target="_blank"
class="download">

Open Resources

</a>

</div>

<div class="dashboard-card">

<h2>Attendance</h2>

<p>

Classes Attended: <strong>12</strong>

</p>

<p>

Attendance Rate:

<strong>95%</strong>

</p>

</div>

<div class="dashboard-card">

<h2>Logout</h2>

<a href="student-login.html"

class="logout">

Logout

</a>

</div>

</div>

</body>

  </html>
