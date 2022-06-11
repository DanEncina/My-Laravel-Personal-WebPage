<?php $__env->startSection('content'); ?>

<head>
	<meta charset="UTF-8">
	<title>My Resume</title>
	<link rel="stylesheet" href="styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<style>


* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
	font-family: 'Arial', sans-serif;
}

body {
  background: #5A3E79;
  font-size: 14px;
  line-height: 22px;
  color: #5F5A5F;
}

.bold {
  font-weight: 700;
  font-size: 20px;
  text-transform: uppercase;
}

.semi-bold {
  font-weight: 500;
  font-size: 16px;
}

.resume {
  width: 800px;
  height: auto;
  display: flex;
  margin: 50px auto;
}

.resume .resume_left {
  width: 280px;
  background: #4C7D60;
}

.resume .resume_left .resume_profile {
  width: 100%;
  height: 280px;
}

.resume .resume_left .resume_profile img {
  width: 100%;
  height: 100%;
}

.resume .resume_left .resume_content {
  padding: 0 25px;
}

.resume .title {
  margin-bottom: 20px;
}

.resume .resume_left .bold {
  color: #988686;
}

.resume .resume_left .regular {
  color: #E89394;
}

.resume .resume_item {
  padding: 25px 0;
  border-bottom: 2px solid #E89394;
}

.resume .resume_left .resume_item:last-child,
.resume .resume_right .resume_item:last-child {
  border-bottom: 0px;
}

.resume .resume_left ul li {
  display: flex;
  margin-bottom: 10px;
  align-items: center;
}

.resume .resume_left ul li:last-child {
  margin-bottom: 0;
}

.resume .resume_left ul li .icon {
  width: 35px;
  height: 35px;
  background: #fff;
  color: #FF8F62;
  border-radius: 50%;
  margin-right: 15px;
  font-size: 16px;
  position: relative;
}

.resume .icon i,
.resume .resume_right .resume_hobby ul li i {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.resume .resume_left ul li .data {
  color: #b1eaff;
}

.resume .resume_left .resume_skills ul li {
  display: flex;
  margin-bottom: 10px;
  color: #b1eaff;
  justify-content: space-between;
  align-items: center;
}

.resume .resume_left .resume_skills ul li .skill_name {
  width: 25%;
}

.resume .resume_left .resume_skills ul li .skill_progress {
  width: 60%;
  margin: 0 5px;
  height: 5px;
  background:#BA0F30;
  position: relative;
}

.resume .resume_left .resume_skills ul li .skill_per {
  width: 15%;
}

.resume .resume_left .resume_skills ul li .skill_progress span {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  background: #fff;
}

.resume .resume_left .resume_social .semi-bold {
  color: #C6B79B;
  margin-bottom: 3px;
}

.resume .resume_right {
  width: 520px;
  background: #fff;
  padding: 25px;
}

.resume .resume_right .bold {
  color: #228280;
}

.resume .resume_right .resume_work ul,
.resume .resume_right .resume_education ul {
  padding-left: 40px;
  overflow: hidden;
}

.resume .resume_right ul li {
  position: relative;
}

.resume .resume_right ul li .date {
  font-size: 16px;
  font-weight: 500;
  margin-bottom: 15px;
}

.resume .resume_right ul li .info {
  margin-bottom: 20px;
}

.resume .resume_right ul li:last-child .info {
  margin-bottom: 0;
}

.resume .resume_right .resume_work ul li:before,
.resume .resume_right .resume_education ul li:before {
  content: "";
  position: absolute;
  top: 5px;
  left: -25px;
  width: 6px;
  height: 6px;
  border-radius: 50%;
  border: 2px solid #228280;
}

.resume .resume_right .resume_work ul li:after,
.resume .resume_right .resume_education ul li:after {
  content: "";
  position: absolute;
  top: 14px;
  left: -21px;
  width: 2px;
  height: 115px;
  background: #228280;
}

.resume .resume_right .resume_hobby ul {
  display: flex;
  justify-content: space-between;
}

.resume .resume_right .resume_hobby ul li {
  width: 80px;
  height: 80px;
  border: 2px solid #FEB281;
  border-radius: 50%;
  position: relative;
  color: #523A28;
}

.resume .resume_right .resume_hobby ul li i {
  font-size: 30px;
}

.resume .resume_right .resume_hobby ul li:before {
  content: "";
  position: absolute;
  top: 40px;
  right: -52px;
  width: 50px;
  height: 2px;
}

.resume .resume_right .resume_hobby ul li:last-child:before {
  display: none;
}

</style>
</head>

<body>

<div class="resume">
   <div class="resume_left">
     <div class="resume_profile">
       <img src="https://i.imgur.com/KKZwqvo.jpg" alt="profile_pic">
     </div>
     <div class="resume_content">
       <div class="resume_item resume_info">
         <div class="title">
           <p class="bold">Daniel P. Encina</p>
           <p class="regular">Student</p>
         </div>
         <ul>
           <li>
             <div class="icon">
               <i class="fas fa-map-signs"></i>
             </div>
             <div class="data">
               152 F. Legaspi Street Barangay Ugong <br /> Pasig City
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fas fa-mobile-alt"></i>
             </div>
             <div class="data">
               09684055762
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fas fa-envelope"></i>
             </div>
             <div class="data">
               dencina0708@gmail.com
             </div>
           </li>
         </ul>
       </div>
       <div class="resume_item resume_skills">
         <div class="title">
           <p class="bold">skill's</p>
         </div>
         <ul>
           <li>
             <div class="skill_name">
               C++
             </div>
             <div class="skill_progress">
               <span style="width:90%;"></span>
             </div>
             <div class="skill_per">90%</div>
           </li>
           <li>
             <div class="skill_name">
               HTML
             </div>
             <div class="skill_progress">
               <span style="width: 80%;"></span>
             </div>
             <div class="skill_per">80%</div>
           </li>
					 <li>
             <div class="skill_name">
               CSS
             </div>
             <div class="skill_progress">
               <span style="width: 80%;"></span>
             </div>
             <div class="skill_per">80%</div>
           </li>
           <li>
             <div class="skill_name">
              VB Net
             </div>
             <div class="skill_progress">
               <span style="width: 60%;"></span>
             </div>
             <div class="skill_per">60%</div>
           </li>
           <li>
             <div class="skill_name">
              Phython
             </div>
             <div class="skill_progress">
               <span style="width: 30%;"></span>
             </div>
             <div class="skill_per">30%</div>
           </li>
					 <li>
             <div class="skill_name">
              Multi Tasking
             </div>
             <div class="skill_progress">
               <span style="width: 100%;"></span>
             </div>
             <div class="skill_per">100%</div>
           </li>
         </ul>
       </div>
       <div class="resume_item resume_social">
         <div class="title">
           <p class="bold">Social</p>
         </div>
         <ul>
           <li>
             <div class="icon">
               <i class="fab fa-facebook-square"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Facebook</p>
               <p>Shizaki2216@facebook</p>
             </div>
           </li>
           <li>
         </ul>
       </div>
     </div>
  </div>
  <div class="resume_right">
    <div class="resume_item resume_about">
        <div class="title">
           <p class="bold">About me</p>
         </div>
        <p>Hi I am Daniel Encina, currently a 3rd year student from Pamantasan ng Lungsod ng Pasig. I am a jolly type of person but sometimes I do want to isolate myself to gain peace and tranquility. I like people who can accept me for who I am, and I dislike people who easily judge other people. My childhood dream was to be a dentist, but when I grew up, I want to be a Gaming Streamer because I love playing games and it is my passion. My dreamplace to visit is Japan. I want to know their culture, the Anime related stuff there and I also wamt to live there sometime.</p>
				</div>
    <div class="resume_item resume_education">
      <div class="title">
           <p class="bold">One Laravel Specific Topic: Why use Laravel?</p>
         </div>
      <p>Laravel may serve as a full stack framework. By "full stack" framework we mean that you are going to use Laravel to route requests to your application and render your frontend via Blade templates or using a single-page application hybrid technology like Inertia.js. This is the most common way to use the Laravel framework.</p>
    </div>
    <div class="resume_item resume_hobby">
      <div class="title">
           <p class="bold">One Lecture from CS202: Github</p>
         </div>
       <p>Git is a free and open source distributed version control system designed to handle everything from small to very large projects with speed and efficiency. Git is easy to learn and has a tiny footprint with lightning fast performance. It outclasses SCM tools like Subversion, CVS, Perforce, and ClearCase with features like cheap local branching, convenient staging areas, and multiple workflows.</p>
    </div>

			<div class="resume_item resume_about">
	<div class="title">
		 <p class="bold">How Can you see yourself 6 years from now?</p>
	 </div>
	 <p>6 years from now I wish I see myself as a successful Gaming Streamer who enjoys his time spending with other people having fun giving other people good vibes and earning just enough to provide for my family and my self.</p>
 </div>

 </div>
</div>
</div>
</body>
</html>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\My-Laravel-Personal-Webpage-main\resources\views/pages/home.blade.php ENDPATH**/ ?>