<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Students Barbershop | Home</title>
<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Playfair+Display:wght@700&display=swap");
html { scroll-behavior: smooth; }
body { margin:0;font-family:"Poppins",sans-serif;background-color:#111;color:#fff; }

/* ===== HEADER ===== */
header{background-color:rgba(0,0,0,.85);display:flex;justify-content:space-between;align-items:center;padding:15px 50px;position:fixed;top:0;left:0;right:0;z-index:1000;box-shadow:0 2px 8px rgba(0,0,0,.5);}
.logo img{height:60px;width:auto;display:block;}
nav ul{list-style:none;display:flex;margin:0;padding:0;}
nav ul li{margin-left:25px;}
nav ul li a{color:#ddd;text-decoration:none;font-weight:500;transition:color .3s;}
nav ul li a:hover,nav ul li a.active{color:#d2a156;}
.admin-btn{background-color:#d2a156;color:#000;border:none;padding:8px 15px;border-radius:5px;font-weight:600;cursor:pointer;transition:background-color .3s;}
.admin-btn:hover{background-color:#c09040;}

/* ===== HERO ===== */
.hero{height:100vh;background:linear-gradient(rgba(0,0,0,.6),rgba(0,0,0,.7)),url("image/gambar.jpg") center/cover no-repeat;display:flex;align-items:center;justify-content:flex-start;padding:0 80px;padding-top:100px;color:#fff;}
.hero-content{max-width:600px;}
.hero-content p{color:#ccc;margin-bottom:10px;letter-spacing:1px;text-transform:uppercase;}
.hero-content h1{font-family:"Playfair Display",serif;font-size:3em;line-height:1.2;}
.hero-content h1 span{color:#d2a156;}
.btn{display:inline-block;margin-top:25px;padding:12px 30px;border:2px solid #d2a156;color:#d2a156;text-decoration:none;font-weight:600;text-transform:uppercase;transition:all .3s ease;letter-spacing:1px;margin-right:15px;}
.btn:hover{background-color:#d2a156;color:#000;}

/* ===== SERVICES ===== */
#services-user{background-color:#181818;text-align:center;padding:80px 30px;}
#services-user h2{font-family:"Playfair Display",serif;color:#d2a156;font-size:2.2em;margin-bottom:50px;}
.services-container{display:flex;flex-wrap:wrap;justify-content:center;gap:30px;}
.service-card{background-color:#222;border-radius:10px;padding:30px;width:280px;text-align:center;box-shadow:0 0 15px rgba(210,161,86,.2);transition:transform .3s ease,box-shadow .3s ease;cursor:pointer;}
.service-card:hover{transform:translateY(-8px);box-shadow:0 0 20px rgba(210,161,86,.4);}
.service-card h3{color:#d2a156;font-family:"Playfair Display",serif;margin-bottom:10px;}
.service-card p{color:#ccc;font-size:.95em;}
.service-card span{color:#d2a156;display:block;margin-top:10px;font-weight:600;}

/* ===== GALLERY POPUP GEMPAAK ===== */
.gallery-popup{display:none;position:fixed;top:0;left:0;right:0;bottom:0;background: rgba(0,0,0,0.95);backdrop-filter: blur(6px);justify-content:center;align-items:center;z-index:2000;padding:20px;}
.gallery-box{background:#222;border-radius:15px;padding:25px;width:90%;max-width:850px;text-align:center;transform: scale(0.8);opacity:0;animation: popupIn 0.4s forwards;box-shadow: 0 0 30px rgba(210,161,86,0.5);}
@keyframes popupIn{ to{ transform: scale(1); opacity:1; } }
.gallery-box h3{color:#d2a156;margin-bottom:25px;font-family:"Playfair Display",serif;font-size:1.8em;}
.gallery-images{display:flex;flex-wrap:wrap;justify-content:center;gap:20px;}
.gallery-images img{width:45%;max-width:220px;border-radius:12px;cursor:pointer;position:relative;transition: transform 0.3s, box-shadow 0.3s;}
.gallery-images img:hover{transform: scale(1.1) rotate(-2deg);box-shadow: 0 15px 30px rgba(210,161,86,0.6);}
.close-gallery{margin-top:25px;padding:10px 25px;border:none;background:#d2a156;color:#000;border-radius:8px;cursor:pointer;font-weight:600;transition: background 0.3s;}
.close-gallery:hover{ background:#c29140; }
@media(max-width:600px){ .gallery-images img{width:90%;} }

/* ===== BARBER ===== */
#barber-page{background-color:#181818;text-align:center;padding:80px 30px;}
#barber-page h2{font-family:"Playfair Display",serif;color:#d2a156;font-size:2.2em;margin-bottom:40px;}
.barber-container{display:flex;justify-content:center;gap:30px;flex-wrap:wrap;}
.barber-card{background-color:#222;padding:20px;border-radius:10px;cursor:pointer;transition:transform .3s;}
.barber-card:hover{transform:translateY(-5px);}
.barber-card img{width:200px;height:200px;object-fit:cover;border-radius:10px;}
.barber-popup{display:none;position:fixed;top:0;left:0;right:0;bottom:0;background:rgba(0,0,0,.85);justify-content:center;align-items:center;z-index:3000;}
.barber-popup-content{background:#222;padding:30px;border-radius:10px;text-align:center;width:90%;max-width:500px;}
.barber-popup-content img{width:100%;max-width:300px;margin-bottom:15px;border-radius:10px;}
.barber-popup-content h3{color:#d2a156;margin-bottom:15px;}
.barber-popup-content p{color:#ccc;line-height:1.5;}
.barber-popup-content button{margin-top:20px;padding:10px 20px;border:none;background:#d2a156;color:#000;border-radius:5px;cursor:pointer;font-weight:600;}

/* ===== BOOKING ===== */
#booking{background-color:#111;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;padding:80px 30px;}
#booking h2{font-family:"Playfair Display",serif;color:#d2a156;margin-bottom:40px;}
form{max-width:500px;background-color:#222;padding:40px;border-radius:10px;box-shadow:0 0 15px rgba(210,161,86,.3);}
label{display:block;margin-top:15px;color:#d2a156;font-weight:600;font-size:.9em;}
input,select{width:100%;padding:10px;margin-top:8px;border:none;border-radius:5px;background-color:#333;color:#fff;font-size:.9em;}
.book-btn{margin-top:25px;background-color:#d2a156;border:none;color:#000;font-weight:700;text-transform:uppercase;padding:12px 20px;width:100%;border-radius:5px;cursor:pointer;transition:.3s;}
.book-btn:hover{background-color:#c4913f;}

/* ===== CONTACT - MODERN CARDS ===== */
#contact{background-color:#111;text-align:center;padding:80px 30px;}
#contact h2{font-family:"Playfair Display",serif;color:#d2a156;font-size:2.2em;margin-bottom:50px;}
.contact-container{display:flex;flex-wrap:wrap;justify-content:center;gap:25px;}
.contact-card{background-color:#222;border-radius:15px;padding:30px 25px;min-width:200px;max-width:250px;box-shadow:0 8px 20px rgba(210,161,86,0.2);transition: transform 0.3s, box-shadow 0.3s;}
.contact-card:hover{transform: translateY(-5px);box-shadow:0 12px 30px rgba(210,161,86,0.4);}
.contact-card .icon{font-size:2.2em;margin-bottom:15px;}
.contact-card p{color:#ccc;font-size:1em;line-height:1.5;}

/* ===== ADMIN ===== */
#adminPage{display:none;background:linear-gradient(135deg,#1a1a1a,#333);color:#fff;min-height:100vh;padding:100px 50px;text-align:center;}
#adminPage h2{color:#d2a156;font-family:"Playfair Display",serif;font-size:2.5em;}
table{width:90%;margin:30px auto;border-collapse:collapse;background-color:#222;border-radius:10px;overflow:hidden;box-shadow:0 0 15px rgba(210,161,86,.3);}
th,td{padding:15px;border-bottom:1px solid #333;}
th{background-color:#d2a156;color:#000;text-transform:uppercase;}
tr:hover{background-color:#2c2c2c;}
#logoutBtn{background:#d9534f;color:#fff;border:none;padding:10px 18px;border-radius:5px;cursor:pointer;font-weight:bold;margin-top:20px;}
#logoutBtn:hover{background:#c9302c;}
.login-popup{display:none;position:fixed;top:0;left:0;right:0;bottom:0;background:rgba(0,0,0,.8);justify-content:center;align-items:center;z-index:2000;}
.login-box{background:#222;padding:40px;border-radius:10px;text-align:center;box-shadow:0 0 15px rgba(210,161,86,.4);}
.login-box h3{color:#d2a156;margin-bottom:20px;}
.login-box input{width:100%;padding:10px;margin:8px 0;border:none;border-radius:5px;background:#333;color:#fff;}
.login-btn{background:#d2a156;color:#000;border:none;padding:10px 20px;border-radius:5px;cursor:pointer;font-weight:600;}
.login-btn:hover{background:#c29140;}
.pending-row{background-color:#d2a15633;}
.approved-row{background-color:#5cb85c33;}
.rejected-row{background-color:#d9534f33;}
.approve-btn, .reject-btn{margin:2px 2px;padding:5px 8px;border:none;border-radius:5px;cursor:pointer;}
.approve-btn{background-color:#5cb85c;color:#000;font-weight:600;}
.reject-btn{background-color:#d9534f;color:#fff;font-weight:600;}
</style>
</head>
<body>

<header>
<div class="logo"><img src="image/A_logo_for_Students_Barbershop_is_set_against_a_.png" alt="Logo" /></div>
<nav>
<ul>
<li><a href="#home" class="active">Home</a></li>
<li><a href="#services-user">Services</a></li>
<li><a href="#barber-page">The Barber</a></li>
<li><a href="#booking">Book</a></li>
<li><a href="#contact">Contact</a></li>
<li><button class="admin-btn" id="adminLoginBtn">Admin Login</button></li>
</ul>
</nav>
</header>

<section class="hero" id="home">
<div class="hero-content">
<p>We Know What Haircut Suits You</p>
<h1>Making Your Look<br /><span>Awesome & Manly</span></h1>
<a href="#booking" class="btn">Book Appointment</a>
<a href="#services-user" class="btn">View Services</a>
</div>
</section>

<section id="services-user">
<h2>Our Services</h2>
<div class="services-container">
<div class="service-card" onclick="openGallery('classic')"><h3>Classic Haircut</h3><p>Neat and clean haircut perfect for students and professionals.</p><span>RM15</span></div>
<div class="service-card" onclick="openGallery('beard')"><h3>Beard Trim</h3><p>Sharp trimming for a clean masculine look.</p><span>RM10</span></div>
<div class="service-card" onclick="openGallery('wash')"><h3>Hair Wash & Styling</h3><p>Relaxing wash followed by a perfect style.</p><span>RM20</span></div>
<div class="service-card" onclick="openGallery('color')"><h3>Hair Coloring</h3><p>Express yourself with natural or bold tones.</p><span>RM35</span></div>
</div>
</section>

<div class="gallery-popup" id="galleryPopup">
  <div class="gallery-box">
    <h3 id="galleryTitle">Service Examples</h3>
    <div class="gallery-images" id="galleryImages"></div>
    <button class="close-gallery" onclick="closeGallery()">Close</button>
  </div>
</div>

<section id="barber-page">
<h2>Meet The Barbers</h2>
<div class="barber-container">
<div class="barber-card" onclick="openBarberPopup('Haikal','Haikal is a master of classic hairstyles with 5 years experience.','image/barber1.jpg')">
<img src="image/barber1.jpg" alt="Haikal">
<h4>Haikal</h4>
</div>
<div class="barber-card" onclick="openBarberPopup('Muizuddin','Muizuddin specializes in beard styling and modern haircuts.','image/barber2.jpg')">
<img src="image/barber2.jpg" alt="Muizuddin">
<h4>Muizuddin</h4>
</div>
<div class="barber-card" onclick="openBarberPopup('Farhan','Farhan is an expert in hair coloring and creative styles.','image/barber3.jpg')">
<img src="image/barber3.jpg" alt="Farhan">
<h4>Farhan</h4>
</div>
</div>
</section>

<div class="barber-popup" id="barberPopup">
<div class="barber-popup-content">
<img id="barberImage" src="" alt="Barber Image">
<h3 id="barberName">Barber Name</h3>
<p id="barberAchievement">Achievement details here.</p>
<button onclick="closeBarberPopup()">Close</button>
</div>
</div>

<section id="booking">
<h2>Book an Appointment</h2>
<form id="bookingForm" onsubmit="sendWhatsApp(); return false;">
<label>Full Name</label><input type="text" id="name" name="name" required/>
<label>Email</label><input type="email" id="email" name="email" required/>
<label>Date</label><input type="date" id="date" name="appointment_date" required/>
<label>Time</label><input type="time" id="time" name="appointment_time" required/>
<label>Service</label>
<select id="service" name="service" required>
<option value="">-- Choose a Service --</option>
<option>Classic Haircut - RM15</option>
<option>Classic Haircut & Hair wash - RM20</option>
<option>Beard Trim - RM10</option>
<option>Classic Haircut & Beard Trim - RM20</option>
<option>Hair Wash & Styling - RM20</option>
<option>Hair Wash & Beard Trim - RM15</option>
<option>Hair Coloring - RM35</option>
<option>Classic Haircut & Hair Coloring - RM40</option>
</select>
<label>Choose Your Barber</label>
<select id="barberSelect" name="barber" required>
<option value="">-- Choose a Barber --</option>
<option>Haikal</option>
<option>Muizuddin</option>
<option>Farhan</option>
</select>
<button type="submit" class="book-btn">Book Appointment</button>
</form>
</section>

<section id="contact">
<h2>Contact Information</h2>
<div class="contact-container">
  <div class="contact-card"><div class="icon">📍</div><p>Kolej Kediaman UTHM Pagoh</p></div>
  <div class="contact-card"><div class="icon">✉️</div><p>studentsbarbershop@gmail.com</p></div>
  <div class="contact-card"><div class="icon">🕒</div><p>Mon–Sat: 9AM–8PM</p></div>
  <div class="contact-card"><div class="icon">📞</div><p>+60 135157020</p></div>
</div>
</section>

<div class="login-popup" id="loginPopup">
<div class="login-box">
<h3>Admin Login</h3>
<input type="text" id="adminUser" placeholder="Username"/>
<input type="password" id="adminPass" placeholder="Password"/>
<button class="login-btn" onclick="loginAdmin()">Login</button>
</div>
</div>

<section id="adminPage">
<h2>Admin Dashboard</h2>
<p>Booking List from Customers</p>
<button id="logoutBtn">Logout</button>
<table id="bookingTable">
<tr>
<th>No</th><th>Name</th><th>Email</th><th>Date</th><th>Time</th><th>Service</th><th>Barber</th><th>Status</th><th>Action</th>
</tr>
</table>
</section>

<script>
// ===== GALLERY JS =====
const serviceImages = {
classic:["image/classic1.jpg","image/classic2.jpg","image/classic3.jpg"],
beard:["image/beard1.jpg","image/beard2.jpg","image/beard3.jpg"],
wash:["image/wash1.jpg","image/wash2.jpg","image/wash3.jpg"],
color:["image/color1.jpg","image/color2.jpg","image/color3.jpg"]
};
function openGallery(service){
  const popup = document.getElementById("galleryPopup");
  const galleryTitle = document.getElementById("galleryTitle");
  const galleryDiv = document.getElementById("galleryImages");
  galleryTitle.textContent = service.charAt(0).toUpperCase() + service.slice(1) + " Examples";
  galleryDiv.innerHTML = "";
  serviceImages[service].forEach(src => {
    const img = document.createElement("img");
    img.src = src;
    galleryDiv.appendChild(img);
  });
  popup.style.display = "flex";
}
function closeGallery(){ document.getElementById("galleryPopup").style.display="none"; }

// ===== BARBER POPUP =====
function openBarberPopup(name,achievement,imgSrc){
document.getElementById("barberName").textContent=name;
document.getElementById("barberAchievement").textContent=achievement;
document.getElementById("barberImage").src=imgSrc;
document.getElementById("barberPopup").style.display="flex";
}
function closeBarberPopup(){document.getElementById("barberPopup").style.display="none";}

// ===== ADMIN LOGIN =====
const admins = [
{ username: "admin1", password: "12345", barber: "Haikal" },
{ username: "admin2", password: "12345", barber: "Muizuddin" },
{ username: "admin3", password: "12345", barber: "Farhan" }
];
let currentAdminBarber = "";

document.getElementById("adminLoginBtn").onclick = () => { document.getElementById("loginPopup").style.display = "flex"; };

function loginAdmin(){
const user=document.getElementById("adminUser").value;
const pass=document.getElementById("adminPass").value;
const validAdmin = admins.find(a=>a.username===user && a.password===pass);
if(validAdmin){
document.getElementById("loginPopup").style.display="none";
document.querySelector("header").style.display="none";
document.querySelector(".hero").style.display="none";
document.getElementById("services-user").style.display="none";
document.getElementById("barber-page").style.display="none";
document.getElementById("booking").style.display="none";
document.getElementById("contact").style.display="none";
document.getElementById("adminPage").style.display="block";
currentAdminBarber = validAdmin.barber;
loadBookings();
}else{alert("Invalid admin username or password!");}
}

function saveBooking(data){
if(!data.status)data.status="Pending";
let bookings=JSON.parse(localStorage.getItem("bookings"))||[];
bookings.push(data);
localStorage.setItem("bookings",JSON.stringify(bookings));
}

// ===== LOAD BOOKINGS =====
function loadBookings(){
const table=document.getElementById("bookingTable");
table.innerHTML=`<tr>
<th>No</th><th>Name</th><th>Email</th><th>Date</th><th>Time</th><th>Service</th><th>Barber</th><th>Status</th><th>Action</th>
</tr>`;
const bookings=JSON.parse(localStorage.getItem("bookings"))||[];
bookings.forEach((b,index)=>{
if(b.barber !== currentAdminBarber) return;
const row=table.insertRow();
row.id="row-"+index;
row.className = getRowClass(b.status);
row.innerHTML=`
<td>${index+1}</td>
<td>${b.name}</td>
<td>${b.email}</td>
<td>${b.date}</td>
<td>${b.time}</td>
<td>${b.service}</td>
<td>${b.barber}</td>
<td id="status-${index}">${b.status}</td>
<td>
<button class="approve-btn" onclick="updateStatus(${index},'Approved')">Approve</button>
<button class="reject-btn" onclick="updateStatus(${index},'Rejected')">Reject</button>
<button onclick="deleteBooking(${index})">Delete</button>
</td>`;
});
}

function getRowClass(status){
switch(status){
case "Approved": return "approved-row";
case "Rejected": return "rejected-row";
default: return "pending-row";
}
}

function updateStatus(index,status){
let bookings=JSON.parse(localStorage.getItem("bookings"));
bookings[index].status=status;
localStorage.setItem("bookings",JSON.stringify(bookings));
document.getElementById("status-"+index).textContent=status;
document.getElementById("row-"+index).className = getRowClass(status);
}

function deleteBooking(index){
let bookings=JSON.parse(localStorage.getItem("bookings"));
bookings.splice(index,1);
localStorage.setItem("bookings",JSON.stringify(bookings));
loadBookings();
}

document.getElementById("logoutBtn").onclick = ()=>{ location.reload(); };

// ===== BOOKING FORM =====
function sendWhatsApp(){
const name=document.getElementById("name").value;
const email=document.getElementById("email").value;
const date=document.getElementById("date").value;
const time=document.getElementById("time").value;
const service=document.getElementById("service").value;
const barber=document.getElementById("barberSelect").value;
if(!name||!email||!date||!time||!service||!barber){alert("Please fill all fields!"); return;}
saveBooking({name,email,date,time,service,barber,status:"Pending"});
const adminNumber="60135157020";
const message=`Hello Admin!\n\nName: ${name}\nEmail: ${email}\nDate: ${date}\nTime: ${time}\nService: ${service}\nBarber: ${barber}`;
window.open(`https://wa.me/${adminNumber}?text=${encodeURIComponent(message)}`,"_blank");
}
</script>
</body>
</html>