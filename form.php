<!-- Validate for Login and sessions set -->
<?php
session_start();
include 'database.php';
if(isset($_SESSION["uname"]) && isset($_SESSION["password"]))
{
$uname=$_SESSION['uname'];
$password=$_SESSION['password'];
$sql="select * from users where email='$uname' and password='$password'";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
if($num==0)
{
echo "This page is forbidden";
exit();
}
}
else
{
echo "This page is forbidden";
exit(); 
}
echo "<div id='username' style='display:none'>$uname</div>"
?>
<!-- Validate for Login and sessions set -->


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script
src="https://code.jquery.com/jquery-3.4.1.js"
integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
crossorigin="anonymous"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/form.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
<script src="javascript/form.js"></script>
</head>
<body>




<!-- Login form for getting pdf -->
<div id="id01"  class="modal">
<form id="get_pdf" class="modal-content animate">
<div class="imgcontainer">
<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
</div>
<div class="container">
<label for="player_type"><b>Select Event Type :-</b></label>
<select  name="p_player_type">
<option>solo</option>
<option>team</option>
</select>
<label for="p_event_type"><b>Select Event Type :-</b></label>
<select  id="p_event_type" name="p_event_type">
<option>Select</option>
<option>Departmental Event</option>
<option>Creative Event</option>
<option>Online Event</option>
<option>Robotics Event</option>
<option>Gaming Zone</option>
<option>Exhibition</option>
</select><b id="p_event_type_error" style="color:red"></b><br>
<div style="display:none" id="p_event_department">
<label for="p_event_department"><b>Select Department of Event :-</b></label>
<select id="p_selected_dept" name="p_event_department">
<option>select</option>
<option>CODESTER</option>
<option>TEXPLORER</option>
<option>CENFEST</option>
<option>MECHATRON</option>
<option>CONFERENCE</option>
<option>ELECTROMA</option>
<option>CHEMTREK</option>
</select>
<b id="p_event_department_error" style="color:red"></b><br>
</div>
<div style="display:none" id="p_event_div">
<label for="p_event"><b>Select Event :-</b></label>
<select id="p_event" name="p_event">
</select>
</div>
<label for="p_psw"><b>Enter Login Password :-</b></label>
<input type="password" placeholder="Enter Login Password" name="p_psw" required>
<button type="submit">Login</button>
</div>
<b id='p_error'></b>
<div class="container" style="background-color:#f1f1f1">
<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
</div>
</form>
</div>
<!-- Login form for getting pdf -->


<!-- header containing all buttons -->
<div class="container">  
<a onclick="document.getElementById('id01').style.display='block'"><i  class="fa fa-file pull-right" title="download pdf for event registeration" style="font-size:30px;color:red;cursor:pointer"></i></a>
<a id='logout' value="<?php session_start(); echo $_SESSION['uname']; ?>" href="#" class="btn btn-info btn-sm float-right animated bounceInLeft slow"><span class="glyphicon glyphicon-log-out"></span> Log out</a><br><br>
<button id='btn_solo' style="background-color:#0000ab;border:solid black 2px" onclick="solo()" type="submit" class="changebtn">Solo Event</button><button id='btn_team' style="background-color:#00008b;border:solid black 2px" onclick="team()" type="submit" class="changebtn">Team Event</button>
<img id="logo" src="images/pragyaa.jpg" alt="Avatar" class="avatar animated bounceInLeft slow">
<h3 id="mobile_info" class='animated bounceInLeft slow' style="display:none;font-family:LittleLordFontleroyNF">PRAGYAA 2020 REGISTRATION FORM</h3>
<h1 id="desk_info" class='animated bounceInLeft slow' style="display:block">PRAGYAA 2020 REGISTRATION FORM</h1>
</div>          
<!-- header containing all buttons -->


<!-- FORM FOR SOLO EVENT -->
<form  id="solo" action="#">
<div style= font-family:LittleLordFontleroyNF class="container">
<hr>
<label for="first_name"><b>First Name :-</b></label>
<input autocomplete="off" type="text" placeholder="Enter First Name " name="fname" required>

<label for="last_name"><b>Last Name :-</b></label>
<input autocomplete="off" type="text" placeholder="Enter Last Name " name="lname" required>

<label for="gender"><b>Gender :-</b></label>
<select name="gender">
<option>Male</option>
<option>Female</option>
</select>

<label for="email"><b>Email :-</b></label>
<input autocomplete="off" type="email" placeholder="Enter Email " name="email" required>

<label for="mobile_number"><b>Mobile Number :-</b></label>
<input autocomplete="off" type="text"  pattern="[0-9]{10}" placeholder="Enter Mobile Number" name="mnumber" required>

<label for="college"><b>College Name :-</b></label>
<input autocomplete="off" list="college" type="text" placeholder="Enter College " name="college" required>
<datalist id="college" style="width: 100px;">
<option>Government College of Engineering, Amravati </option>
<option>Sant Gadge Baba Amravati University,Amravati </option>
<option>Shri Sant Gajanan Maharaj College of Engineering,Shegaon </option>
<option>Prof. Ram Meghe Institute of Technology & Research, Amravati </option>
<option>P. R. Pote (Patil) Education & Welfare Trust's Group of Institution(Integrated Campus), Amravati </option>
<option>Sipna Shikshan Prasarak Mandal College of Engineering & Technology, Amravati </option>
<option>Shri Shivaji Education Society's College of Engineering and Technology, Akola </option>
<option>Janata Shikshan Prasarak Mandal’s Babasaheb Naik College Of Engineering, Pusad </option>
<option>Paramhansa Ramkrishna Maunibaba Shikshan Santha's , Anuradha Engineering College, Chikhali </option>
<option>Jawaharlal Darda Institute of Engineering and Technology, Yavatmal </option>
<option>Shri Hanuman Vyayam Prasarak Mandals College of Engineering & Technology, Amravati </option>
<option>Dr. Bhausaheb Nadurkar College of Engineering, Waghapur,Yavatmal </option>
<option>Dr.Rajendra Gode Institute of Technology & Research, Amravati </option>
<option>G.H. Raisoni college of Engineering & Management, Amravati </option>
<option>Dwarka Bahu Uddeshiya Gramin Vikas Foundation, Rajarshri Shahu College of Engineering, Buldhana </option>
<option>Shri. Dadasaheb Gawai Charitable Trust's Dr. Smt. Kamaltai Gawai Institute of Engineering & Technology, Darapur, Amravati </option>
<option>Jagadambha Bahuuddeshiya Gramin Vikas Sanstha's Jagdambha College of Engineering and Technology, Yavatmal </option>
<option>Prof Ram Meghe College of Engineering and Management, Badnera </option>
<option>Vision Buldhana Educational & Welfare Society's Pankaj Laddhad Institute of Technology & Management Studies, Yelgaon </option>
<option>P. R. Pote Patil Institute of Engineering & Research, At Kathora, Amravati </option>
<option>Sanmati Engineering College, Sawargaon Barde, Washim </option>
<option>Padmashri Dr. V.B. Kolte College of Engineering, Malkapur, Buldhana </option>
<option>Mauli Group of Institutions, College of Engineering and Technology, Shegaon. </option>
<option>Siddhivinayak Technical Campus, School of Engineering & Research Technology, Shirasgon, Nile </option>
<option>Manav School of Engineering & Technology, Gut No. Nagpur Surat Highway, NH No. 6 Tal.Vyala, Balapur, Akola, </option>
<option>Government College of Engineering, Aurangabad </option>
<option>Everest Education Society, Group of Institutions (Integrated Campus), Ohar </option>
<option>Maharashtra College of Engineering, Nilanga </option>
<option>Nagnathappa Halge Engineering College, Parli, Beed </option>
<option>Matsyodari Shikshan Sansatha's College of Engineering and Technology, Jalna </option>
<option>Shri Sai Samajik Vikas Santha's Shri Sai Colllege of Engineering, Paddari Village Tal. & Dist. Aurangabad </option>
<option>Adarsh Shikshan Prasarak Mandal's K. T. Patil College of Engineering and Technology, Osmanabad </option>
<option>International Centre of Excellence in Engineering & Management, Aurangabad. </option>
<option>Gramin College of Engineering, Vishnupuri, Nanded </option>
<option>Veermata Jijabai Technological Institute(VJTI), Matunga, Mumbai </option>
<option>Sardar Patel College of Engineering, Andheri </option>
<option>Usha Mittal Institute of Technology SNDT Women's University, Mumbai </option>
<option>Institute of Chemical Technology, Matunga, Mumbai </option>
<option>Manjara Charitable Trust's Rajiv Gandhi Institute of Technology, Mumbai </option>
<option>Vidyalankar Institute of Technology,Wadala, Mumbai </option>
<option>Jawahar Education Society's Annasaheb Chudaman Patil College of Engineering,Kharghar, Navi Mumbai </option>
<option>Mahavir Education Trust's Shah & Anchor Kutchhi Engineering College, Mumbai </option>
<option>Saraswati Education Society's Saraswati College of Engineering,Kharghar Navi Mumbai </option>
<option>Ramrao Adik Edu Soc, Ramarao Adik Institute of Tech., Navi Mumbai </option>
<option>M.G.M.'s College of Engineering and Technology, Kamothe, Navi Mumbai </option>
<option>Thakur College of Engineering and Technology, Kandivali, Mumbai </option>
<option>K.J.Somaiya College of Engineering, Vidyavihar, Mumbai </option>
<option>Thadomal Shahani Engineering College, Bandra, Mumbai </option>
<option>Anjuman-I-Islam's M.H. Saboo Siddik College of Engineering, Byculla, Mumbai </option>
<option>Fr. Conceicao Rodrigues College of Engineering, Bandra,Mumbai </option>
<option>Vivekanand Education Society's Institute of Technology, Chembur, Mumbai </option>
<option>N.Y.S.S.'s Datta Meghe College of Engineering, Airoli, Navi Mumbai </option>
<option>Padmabhushan Vasantdada Patil Pratishthans College of Engineering, Sion,Mumbai </option>
<option>Bharati Vidyapeeth College of Engineering, Navi Mumbai </option>
<option>College of Engineering ,Pune</option>
<option>Terna Engineering College, Nerul, Navi Mumbai </option>
<option>Smt. Indira Gandhi College of Engineering, Navi Mumbai </option>
<option>Shivajirao S. Jondhale College of Engineering, Dombivali,Mumbai </option>
<option>Vidyavardhini's College of Engineering and Technology, Vasai </option>
<option>Lokmanya Tilak College of Engineering, Kopar Khairane, Navi Mumbai </option>
<option>Agnel Charities' FR. C. Rodrigues Institute of Technology, Vashi, Navi Mumbai </option>
<option>Konkan Gyanpeeth College of Engineering, Karjat </option>
<option>Shri Vile Parle Kelvani Mandal's Dwarkadas J. Sanghvi College of Engineering, Vile Parle,Mumbai </option>
<option>Hope Foundation and research center's Finolex Academy of Management and Technology, Ratnagiri </option>
<option>Rizvi Education Society's Rizvi College of Engineering, Bandra,Mumbai </option>
<option>Rajendra Mane College of Engineering & Technology Ambav Deorukh </option>
<option>Atharva College of Engineering,Malad(West),Mumbai </option>
<option>St. Francis Institute of Technology,Borivali, Mumbai </option>
<option>S.S.P.M.'s College of Engineering, Kankavli </option>
<option>Mahatma Education Society's Pillai College of Engineering, New Panvel </option>
<option>K J Somaiya Institute of Engineering and Information Technology, Sion, Mumbai </option>
<option>Excelsior Education Society's K.C. College of Engineering and Management Studies and Research, Kopri, Thane (E) </option>
<option>S.I.E.S. Graduate School of Technology, Nerul, Navi Mumbai </option>
<option>WATUMULL INSTITUTE OF ELECTRONICS ENGINEERING & COMPUTER TECHNOLOGY, ULHASNAGAR </option>
<option>Xavier Institute Of Engineering C/O Xavier Technical Institute,Mahim,Mumbai </option>
<option>Bhartiya Vidya Bhavan's Sardar Patel Institute of Technology , Andheri, Mumbai </option>
<option>Gharda Foundation's Gharda Institute of Technology,Khed, Ratnagiri </option>
<option>Vighnaharata Trust's Shivajirao S. Jondhale College of Engineering & Technology, Shahapur, Asangaon, Dist Thane </option>
<option>Aldel Education Trust's St. John College of Engineering & Management, Vevoor, Palghar </option>
<option>Koti Vidya Charitable Trust's Smt. Alamuri Ratnamala Institute of Engineering and Technology, Sapgaon, Tal. Shahapur </option>
<option>Saraswati Education Society, Yadavrao Tasgaonkar College of Engineering and Management, Nasarapur, Chandai, Karjat </option>
<option>Late Shri. Vishnu Waman Thakur Charitable Trust, Viva Institute of Technology, Shirgaon </option>
<option>Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar </option>
<option>Mahatma Education Society's Pillai HOC College of Engineering & Technology, Tal. Khalapur. Dist. Raigad </option>
<option>Leela Education Society, G.V. Acharya Institute of Engineering and Technology, Shelu, Karjat </option>
<option>Bharat College of Engineering, Kanhor, Badlapur(W) </option>
<option>Dilkap Research Institute Of Engineering and Management Studies, At.Mamdapur, Post- Neral, Tal- Karjat, Mumbai </option>
<option>Shree L.R. Tiwari College of Engineering, Mira Road, Mumbai </option>
<option>B.R. Harne College of Engineering & Technology, Karav, Tal-Ambernath. </option>
<option>Anjuman-I-Islam's Kalsekar Technical Campus, Panvel </option>
<option>Metropolitan Institute of Technology & Management, Sukhalwad, Sindhudurg. </option>
<option>Vishvatmak Jangli Maharaj Ashram Trust's Vishvatmak Om Gurudev College of Engineering, Mohili-Aghai, Shahpur. </option>
<option>G.M.Vedak Institute of Technology, Tala, Raigad. </option>
<option>Universal College of Engineering,Kaman Dist. Palghar </option>
<option>VPM's Maharshi Parshuram College of Engineering, Velneshwar, Ratnagiri. </option>
<option>Ideal Institute of Technology, Wada, Dist.Thane </option>
<option>Vishwaniketan's Institute of Management Entrepreneurship and Engineering Technology(i MEET), Khalapur Dist Raigad </option>
<option>New Horizon Institute of Technology & Management, Thane </option>
<option>A. P. Shah Institute of Technology, Thane </option>
<option>Chhartrapati Shivaji Maharaj Institute of Technology, Shedung, Panvel </option>
<option>Indala College Of Engineering, Bapsai Tal.Kalyan </option>
<option>Government College of Engineering, Chandrapur </option>
<option>Laxminarayan Institute of Technology, Nagpur </option>
<option>Government College of Engineering, Nagpur </option>
<option>Kavi Kulguru Institute of Technology & Science, Ramtek </option>
<option>Shri Ramdeobaba College of Engineering and Management, Nagpur </option>
<option>Ankush Shikshan Sanstha's G.H.Raisoni College of Engineering, Nagpur </option>
<option>Bapurao Deshmukh College of Engineering, Sevagram </option>
<option>Lokmanya Tilak Jankalyan Shikshan Sanstha, Priyadarshani College of Engineering, Nagpur </option>
<option>Sanmarg Shikshan Sanstha's Smt. Radhikatai Pandav College of Engineering, Nagpur </option>
<option>Guru Nanak Institute of Engineering & Technology,Kalmeshwar, Nagpur </option>
<option>Amar Seva Mandal's Shree Govindrao Vanjari College of Engineering & Technology, Nagpur </option>
<option>Lokmanya Tilak Jankalyan Shikshan Sastha, Priyadarshini J. L. College Of Engineering, Nagpur </option>
<option>Sir Shantilal Badjate Charitable Trust's S. B. Jain Institute of technology, Management & Research, Nagpur </option>
<option>Samridhi Sarwajanik Charitable Trust, Jhulelal Institute of Technology, Nagpur </option>
<option>Shriram Gram Vikas Shikshan Sanstha, Vilasrao Deshmukh College of Engineering and Technology, Nagpur </option>
<option>Ankush Shikshan Sanstha's G. H. Raisoni Institute of Engineering & Technology, Nagpur </option>
<option>Sanmarg Shikshan Sanstha, Mandukarrao Pandav College of Engineering, Bhandara </option>
<option>Shri. Sai Shikshan Sanstha, Nagpur Institute of Technology, Nagpur </option>
<option>Wainganga College of Engineering and Management, Dongargaon, Nagpur </option>
<option>K.D.K. College of Engineering, Nagpur </option>
<option>Vidarbha Bahu-Uddeshiya Shikshan Sanstha's Tulshiramji Gaikwad Patil College of Engineering & Technology, Nagpur </option>
<option>Yeshwantrao Chavan College of Engineering,Wanadongri, Nagpur </option>
<option>Lokmanya Tilak Jankalyan Shikshan Sanstha's , Priyadarshini Institute of Engineering and Technology, Nagpur </option>
<option>Anjuman College of Engineering & Technology, Nagpur </option>
<option>ST. Vincent Pallotti College of Engineering & Technology, Nagpur </option>
<option>JMSS Shri Shankarprasad Agnihotri College of Engineering, Wardha </option>
<option>Priyadarshini Bhagwati College of Engineering, Harpur Nagar, Umred Road,Nagpur </option>
<option>Rajiv Gandhi College of Engineering & Research, Hingna Road, Nagpur </option>
<option>Lokmanya Tilak Jankalyan Shiksan Sanstha, Priyadarshini Indira Gandhi College of Engineering, Nagpur </option>
<option>Sarvasiddhanta Education Soc's Nuva College of Engineering and Technology, Nagpur </option>
<option>Datta Meghe Institute of Medical Science's Datta Meghe Institute of Engineering & Technology & Research, Savangi (Meghe) </option>
<option>Dr. Babasaheb Ambedkar College of Engineering and Research, Wanadongri, Nagpur </option>
<option>Maitraya Education Society, Nagarjuna Institute of Engineering Technology & Management, Nagpur </option>
<option>K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur </option>
<option>Vidharbha Bahu uddeshiya Shikshan Sanstha's Abha Gaikwad – Patil College of Engineering, Nagpur </option>
<option>Gurunanak Educational Society's Gurunanak Institute of Technology, Nagpur </option>
<option>Jai Mahakali Shikshan Sanstha, Agnihotri College of Engineering, Sindhi(Meghe) </option>
<option>V M Institute of Engineering and Technology, Dongargaon, Nagpur </option>
<option>Gondia Education Society's Manoharbhai Patel Institute Of Engineering & Technology, Shahapur, Bhandara </option>
<option>Cummins College of Engineering For Women, Sukhali (Gupchup), Tal. Hingna Hingna Nagpur </option>
<option>G.H.Raisoni Academy of Engineering & Technology, Nagpur </option>
<option>Suryodaya College of Engineering & Technology, Nagpur </option>
<option>University Institute of Chemical Technology, North Maharashtra University, Jalgaon </option>
<option>Government College of Engineering, Jalgaon </option>
<option>Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon </option>
<option>Shri Gulabrao Deokar College of Engineering, Jalgaon </option>
<option>Nashik District Maratha Vidya Prasarak Samaj's Karmaveer Adv.Babaurao Ganpatrao Thakare College of Engineering, Nashik </option>
<option>Sandip Foundation, Sandip Institute of Technology and Research Centre, Mahiravani, Nashik </option>
<option>K. K. Wagh Institute of Engineering Education and Research, Nashik </option>
<option>Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon </option>
<option>Pravara Rural Education Society's Sir Visvesvaraya Institute of Technology, Chincholi Dist. Nashik </option>
<option>Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik </option>
<option>Pravara Rural College of Engineering, Loni, Pravaranagar, Ahmednagar. </option>
<option>MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik. </option>
<option>G. H. Raisoni Institute of Business Management,Jalgaon </option>
<option>Sanjivani Rural Education Society's Sanjivani College of Engineering, Kopargaon </option>
<option>Dr. Vithalrao Vikhe Patil College of Engineering, Ahmednagar </option>
<option>Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner </option>
<option>Nagaon Education Society's Gangamai College of Engineering, Nagaon, Tal Dist Dhule </option>
<option>SNJB's Late Sau. Kantabai Bhavarlalji Jain College of Engineering, (Jain Gurukul), Neminagar,Chandwad,(Nashik) </option>
<option>G. H. Raisoni College of Engineering and Management, Ahmednagar </option>
<option>Matoshri College of Engineering and Research Centre, Eklahare, Nashik </option>
<option>Vishwabharati Academy's College of Engineering, Ahmednagar </option>
<option>Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik </option>
<option>Kalyani Charitable Trust, Late Gambhirrao Natuba Sapkal College of Engineering, Anjaneri, Trimbakeshwar Road, Nashik </option>
<option>Shri Chhatrapati Shivaji College of Engineering, (Rahuri Factory), Tal.Rahuri, Dist.Ahmednagar </option>
<option>Amruta Vaishnavi Education & Welfare Trust's Shatabdi Institute of Engineering & Research, Agaskhind Tal. Sinnar </option>
<option>Hon. Shri. Babanrao Pachpute Vichardhara Trust, Group of Institutions (Integrated Campus)-Parikrama, Kashti Shrigondha, </option>
<option>Jamia Institute Of Engineering And Management Studies, Akkalkuwa </option>
<option>Pune Vidyarthi Griha's College Of Engineering, Nashik </option>
<option>Sandip Foundation's, Sandip Institute of Engineering & Management, Nashik </option>
<option>Adsul's Technical Campus, Chas Dist. Ahmednagar </option>
<option>Shri. Jaykumar Rawal Institute of Technology, Dondaicha. </option>
<option>Ahmednagar Jilha Maratha Vidya Prasarak Samajache, Shri. Chhatrapati Shivaji Maharaj College of Engineering, Nepti </option>
<option>K.V.N. Naik S. P. Sansth's Loknete Gopinathji Munde Institute of Engineering Education & Research, Nashik. </option>
<option>College of Engineering and Technology ,North Maharashtra Knowledge City, Jalgaon </option>
<option>Sanghavi College of Engineering, Varvandi, Nashik. </option>
<option>Jawahar Education Society's Institute of Technology, Management & Research, Nashik. </option>
<option>Vidya Niketan College of Engineering, Bota Sangamner </option>
<option>Rajiv Gandhi College of Engineering, At Post Karjule Hariya Tal.Parner, Dist.Ahmednagar </option>
<option>Maulana Mukhtar Ahmad Nadvi Technical Campus, Malegaon. </option>
<option>Guru Gobind Singh College of Engineering & Research Centre, Nashik. </option>
<option>Government College of Engineering & Research, Avasari Khurd </option>
<option>Government College of Engineering, Karad </option>
<option>TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune </option>
<option>Genba Sopanrao Moze Trust Parvatibai Genba Moze College of Engineering,Wagholi, Pune </option>
<option>Progressive Education Society's Modern College of Engineering, Pune </option>
<option>Genba Sopanrao Moze College of Engineering, Baner-Balewadi, Pune </option>
<option>JSPM'S Jaywantrao Sawant College of Engineering,Pune </option>
<option>MIT Academy of Engineering,Alandi, Pune </option>
<option>Choudhary Attar Singh Yadav Memorial Trust,Siddhant College of Engineering, Maval </option>
<option>G.H.Raisoni College of Engineering & Management, Wagholi, Pune </option>
<option>Marathwada Mitra Mandal's College of Engineering, Karvenagar, Pune </option>
<option>JSPM's Imperial College of Engineering and Research, Wagholi, Pune </option>
<option>Pimpri Chinchwad Education Trust, Pimpri Chinchwad College of Engineering, Pune </option>
<option>G. H.Raisoni Institute of Engineering and Technology, Wagholi, Pune </option>
<option>Sinhgad College of Engineering, Vadgaon (BK), Pune </option>
<option>Sinhgad Technical Education Society's Smt. Kashibai Navale College of Engineering,Vadgaon,Pune </option>
<option>Indira College of Engineering & Management, Pune </option>
<option>Sinhgad Technical Education Society, Sinhgad Institute of Technology and Science, Narhe (Ambegaon) </option>
<option>Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima </option>
<option>K. J.'s Educational Institut Trinity College of Engineering and Research, Pisoli, Haveli </option>
<option>Sinhagad Institute of Technology, Lonavala </option>
<option>Sinhgad Academy of Engineering, Kondhwa (BK) Kondhwa-Saswad Road, Pune </option>
<option>. 1- Marathwada Mitra Mandal's Institute of Technology, Lohgaon, Pune </option>
<option>Pune District Education Association's College of Engineering, Pune </option>
<option>Dr. D. Y. Patil Vidya Pratishthan Society Dr .D. Y. Patil Institute of Engineering & Technology, Pimpri,Pune </option>
<option>Dattajirao Kadam Technical Education Society's Textile & Engineering Institute, Ichalkaranji. </option>
<option>D.Y. Patil College of Engineering and Technology, Kolhapur </option>
<option>Kolhapur Institute of Technology's College of Engineering(Autonomous), Kolhapur </option>
<option>Tatyasaheb Kore Institute of Engineering and Technology, Warananagar </option>
<option>Pune Institute of Computer Technology, Dhankavdi, Pune </option>
<option>Dr. D. Y. Patil Pratishthan's D.Y.Patil College of Engineering Akurdi, Pune </option>
<option>Pune Vidyarthi Griha's College of Engineering and Technology, Pune </option>
<option>Shivnagar Vidya Prasarak Mandal's College of Engineering, Malegaon-Baramati </option>
<option>Dr. J. J. Magdum Charitable Trust's Dr. J.J. Magdum College of Engineering, Jaysingpur </option>
<option>All India Shri Shivaji Memorial Society's College of Engineering, Pune </option>
<option>Modern Education Society's College of Engineering, Pune </option>
<option>All India Shri Shivaji Memorial Society's Institute of Information Technology,Pune </option>
<option>Annasaheb Dange College of Engineering and Technology, Ashta, Sangli </option>
<option>Vidya Pratishthan's Kamalnayan Bajaj Institute of Engineering & Technology, Baramati Dist.Pune </option>
<option>Bharati Vidyapeeth's College of Engineering for Women, Katraj, Dhankawadi, Pune </option>
<option>Bharati Vidyapeeth's College of Engineering, Kolhapur </option>
<option>Zeal Education Society's Zeal College of Engineering & Reserch, Narhe, Pune </option>
<option>Dr. Ashok Gujar Technical Institute's Dr. Daulatrao Aher College of Engineering, Karad </option>
<option>Dhole Patil Education Society, Dhole Patil College of Engineering, Wagholi, Tal. Haveli </option>
<option>Nutan Maharashtra Vidya Prasarak Mandal, Nutan Maharashtra Institute of Engineering &Technology, Talegaon station, Pune </option>
<option>Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi </option>
<option>Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapur </option>
<option>K.J.'s Educational Institute's K.J.College of Engineering & Management Research, Pisoli </option>
<option>Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi </option>
<option>D. Y. Patil College of Engineering, Ambi, Talegaon, Maval </option>
<option>Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor </option>
<option>Alard Charitable Trust's Alard College of Engineering and Management, Pune </option>
<option>Jaihind College Of Engineering,Kuran </option>
<option>D. Y. Patil Institute of Engineering and Technology, Ambi </option>
<option>I.S.B.& M. School of Technology, Nande Village </option>
<option>Universal College of Engineering & Research, Sasewadi </option>
<option>Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune </option>
<option>Navsahyadri Education Society's Group of Institutions </option>
<option>KJEI's Trinity Academy of Engineering, Yewalewadi, Pune </option>
<option>Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune </option>
<option>TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune </option>
<option>Dr. D. Y. Patil School OF Engineering, Lohegaon, Pune </option>
<option>International Institute of Information Technology (I²IT), Pune. </option>
<option>JSPM Narhe Technical Campus, Pune. </option>
<option>Sahyadri Valley College of Engineering & Technology, Rajuri, Pune. </option>
<option>Shree Ramchandra College of Engineering, Lonikand,Pune </option>
<option>Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune. </option>
<option>P.K. Technical Campus, Pune. </option>
<option>Rasiklal M. Dhariwal Sinhgad Technical Institutes Campus, Warje, Pune. </option>
<option>SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune. </option>
<option>NBN Sinhgad Technical Institutes Campus, Pune </option>
<option>D.Y.Patil Education Society's,D.Y.Patil Technical Campus, Faculty of Engineering & Faculty of Management,Talsande,Kolhapur. </option>
<option>Dr. D. Y. Patil Educational Academy's, D.Y.Patil School of Engineering Academy, Ambi </option>
<option>Anantrao Pawar College of Engineering & Research, Pune </option>
<option>Shri.Someshwar Shikshan Prasarak Mandals, Someshwar Engineering College, Someshwar Nagar </option>
<option>Bharati Vidyapeeth's College of Engineering,Lavale, Pune </option>
<option>Dr. D.Y.Patil Institute of Engineering, Management & Reseach, Akurdi, Pune </option>
<option>Sant Gajanan Maharaj College of Engineering, Gadhinglaj </option>
<option>Keystone School of Engineering, Pune </option>
<option>Vidya Prasarini Sabha's College of Engineering & Technology, Lonavala </option>
<option>Pimpri Chinchwad Education Trust's Pimpri Chinchwad College Of Engineering And Research, Ravet </option>
<option>Dr.D.Y.Patil College Of Engineering & Innovation,Talegaon </option>
<option>Dr. D Y Patil Pratishthan's College of Engineering, Kolhapur </option>
<option>Dr. A. D. Shinde College Of Engineering, Tal.Gadhinglaj, Kolhapur </option>
<option>Government Engineering College, Yavatmal </option>
<option>Dhamangaon Education Society's College of Engineering and Technology, Dhamangaon </option>
<option>Shri Guru Gobind Singhji Institute of Engineering and Technology, Nanded </option>
<option>University Department of Chemical Technology, Aurangabad </option>
<option>Shree Yash Pratishthan, Shreeyash College of Engineering and Technology, Aurangabad </option>
<option>G. S. Mandal's Maharashtra Institute of Technology, Aurangabad </option>
<option>Deogiri Institute of Engineering and Management Studies, Aurangabad </option>
<option>Matoshri Pratishan's Group of Institutions (Integrated Campus), Kupsarwadi , Nanded </option>
<option>Gramodyogik Shikshan Mandal's Marathwada Institute of Technology, Aurangabad </option>
<option>Mahatma Gandhi Missions College of Engineering, Hingoli Rd, Nanded. </option>
<option>M.S. Bidve Engineering College, Latur </option>
<option>Terna Public Charitable Trust's College of Engineering, Osmanabad </option>
<option>Shree Tuljabhavani College of Engineering, Tuljapur </option>
<option>M.G.M.'s Jawaharlal Nehru Engineering College, Aurangabad </option>
<option>Mahatma Basaweshwar Education Society's College of Engineering, Ambejogai </option>
<option>Peoples Education Society's College of Engineering, Aurangabad </option>
<option>Hi-Tech Institute of Technology, Aurangabad </option>
<option>Aditya Engineering College , Beed </option>
<option>Aurangabad College of Engineering, Naygaon Savangi, Aurangabad </option>
<option>Marathwada Shikshan Prasarak Mandal's Shri Shivaji Institute of Engineering and Management Studies, Parbhani </option>
<option>Vilasrao Deshmukh Foundation Group of Institutions, Latur </option>
<option>STMEI's Sandipani Technical Campus-Faculty of Engineering, Latur. </option>
<option>CSMSS Chh. Shahu College of Engineering, Aurangabad </option>
<option>Dr. Babasaheb Ambedkar Technological University, Lonere </option>
<option>Ankush Shikshan Sanstha's G.H.Raisoni College of Engineering, Nagpur </option>
<option>Jaidev Education Society, J D College of Engineering and Management, Nagpur </option>
<option>Rajiv Gandhi College of Engineering Research & Technology Chandrapur </option>
<option>Krushi Jivan Vikas Pratishthan, Ballarpur Institute of Technology, Mouza Bamni </option>
<option>M.D. Yergude Memorial Shikshan Prasarak Mandal's Shri Sai College of Engineering & Technology, Badravati </option>
<option>Bajaj Institute of Technology, Wardha </option>
<option>Shri Shivaji Vidya Prasarak Sanstha's Late Bapusaheb Shivaji Rao Deore College of Engineering,Dhule </option>
<option>K. C. E. Societys College of Engineering and Information Technology, Jalgaon </option>
<option>P.S.G.V.P. Mandal's D.N. Patel College of Engineering, Shahada, Dist. Nandurbar </option>
<option>T.M.E. Society's J.T.Mahajan College of Engineering, Faizpur </option>
<option>Hindi Seva Mandal's Shri Sant Gadgebaba College of Engineering & Technology, Bhusawal </option>
<option>Godavari Foundation's Godavari College Of Engineering, Jalgaon </option>
<option>R. C. Patel Institute of Technology, Shirpur </option>
<option>Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule </option>
<option>College of Engineering, Pune </option>
<option>Walchand College of Engineering, Sangli </option>
<option>Department of Technology, Shivaji University, Kolhapur </option>
<option>Jaywant Shikshan Prasarak Mandal's,Rajarshi Shahu College of Engineering, Tathawade, Pune </option>
<option>K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangli </option>
<option>Shri. Balasaheb Mane Prasarak Mandals, Ashokrao Mane Group of Institutions, Kolhapur </option>
<option>KSGBS's Bharat- Ratna Indira Gandhi College of Engineering, Kegaon, Solapur </option>
<option>Shri Vithal Education and Research Institute's College of Engineering, Pandharpur </option>
<option>Pradnya Niketan Education Society's Nagesh Karajagi Orchid College of Engineering & Technology, Solapur </option>
<option>Walchand Institute of Technology, Solapur </option>
<option>Tatyasaheb Kore Institute of Engineering and Technology, Warananagar </option>
<option>Shetkari Shikshan Mandal's Pad. Vasantraodada Patil Institute of Technology, Budhgaon, Sangli </option>
<option>Rayat Shikshan Sanstha's Karmaveer Bhaurao Patil College of Engineering, Satara </option>
<option>Bansilal Ramnath Agarawal Charitable Trust's Vishwakarma Institute of Technology, Bibwewadi, Pune </option>
<option>MKSSS's Cummins College of Engineering for Women, Karvenagar,Pune </option>
<option>B.R.A.C.T's Vishwakarma Institute of Information Technology, Kondhwa (Bk.), Pune </option>
<option>Kai Amdar Bramhadevdada Mane Shikshan & Samajik Prathistan's Bramhadevdada Mane Institute of Technology, Solapur </option>
<option>Loknete Hanumantrao Charitable Trust's Adarsh Institute of Technology and Research Centre, Vita,Sangli </option>
<option>S.D.N.C.R.E.S'S.Late Narayandas Bhawandas Chhabada Institute of Engineering & Technology, Satara </option>
<option>Shanti Education Society, A.G. Patil Institute of Technology, Soregaon, Solapur(North) </option>
<option>Jaywant College of Engineering & Management, Kille Macchindragad Tal. Walva </option>
<option>Holy-Wood Academy's Sanjeevan Engineering and Technology Institute, Panhala </option>
<option>Sharad Institute of Technology College of Engineering, Yadrav(Ichalkaranji) </option>
<option>Abhinav Education Society's College of Engineering and Technology (Degree), Wadwadi </option>
<option>Vidya Vikas Pratishthan Institute of Engineering and Technology, Solapur </option>
<option>Shri Pandurang Pratishtan, Karmayogi Engineering College, Shelve, Pandharpur </option>
<option>Nutan College of Engineering and Research, Talegaon Dabhade Tal. Maval, Pune </option>
<option>Shree Santkrupa Shikshan Sanstha, Shree Santkrupa Institute Of Engineering & Technology, Karad </option>
<option>Samarth Education Trust's Arvind Gavali College Of Engineering Panwalewadi, Varye,Satara. </option>
<option>N. B. Navale Sinhgad College of Engineering, Kegaon, solapur </option>
<option>S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur </option>
<option>Shri. Ambabai Talim Sanstha's Sanjay Bhokare Group of Institutes, Miraj </option>
<option>Fabtech Technical Campus College of Engineering and Research, Sangola </option>
<option>Yashoda Technical Campus, Wadhe, Satara. </option>
<option>Nanasaheb Mahadik College of Engineering,Walwa, Sangli. </option>
<option>Phaltan Education Society's College of Engineering Thakurki Tal- Phaltan Dist-Satara </option>
<option>Bhagwant Institute of Technology, Barshi </option>
<option>Sahakar Maharshee Shankarrao Mohite Patil Institute of Technology & Research, Akluj </option>
<option>Dnyanshree Institute Engineering and Technology, Satara </option>
<option>MAEER's MIT College of Railway Engineering and Research, Jamgaon, Barshi </option>
<option>Shree Siddheshwar Women's College Of Engineering Solapur. </option>
</datalist>

<label for="branch"><b>Branch :-</b></label>
<input autocomplete="off" list="branch" type="text" placeholder="Enter Branch " name="branch" required>
<datalist id="branch" style="width: 100px;">
<option>Computer science & Engineering</option>
<option>Information Technology</option>
<option>Electronics & Telecommunication</option>
<option>Chemical Engineering</option>
<option>Textile Engineering</option>
<option>Production Engineering</option>
<option>Instrumentation Engineering</option>
<option>Electrical Engineering</option>
<option>Mechanical Engineering</option>
<option>Civil Engineering</option>
</datalist>

<p style="color:red;display:none">*please select college</p>
<label for="district"><b>District :-</b></label>
<input autocomplete="off" list="district" type="text" placeholder="Enter District " name="district" required>
<datalist id="district" style="width: 100px;">
<option value="Nanded">Nanded</option>
<option value="Akola">Akola </option>
<option value="Amravati">Amravati </option>
<option value="Buldana">Buldana </option>
<option value="Yavatmal">Yavatmal </option>
<option value="Washim">Washim </option>
<option value="Aurangabad">Aurangabad </option>
<option value="Beed">Beed </option>
<option value="Jalna">Jalna </option>
<option value="Osmanabad">Osmanabad </option>
<option value="Latur">Latur </option>
<option value="Parbhani">Parbhani </option>
<option value="Hingoli">Hingoli </option>
<option value="Mumbai City">Mumbai City </option>
<option value="Mumbai Suburban">Mumbai Suburban </option>
<option value="Thane">Thane </option>
<option value="Palghar">Palghar </option>
<option value="Raigad">Raigad </option>
<option value="Ratnagiri">Ratnagiri </option>
<option value="Sindhudurg">Sindhudurg </option>
<option value="Mumbai">Mumbai </option>
<option value="Bhandara">Bhandara </option>
<option value="Chandrapur">Chandrapur </option>
<option value="Gadchiroli">Gadchiroli </option>
<option value="Gondia">Gondia </option>
<option value="Nagpur">Nagpur </option>
<option value="Wardha">Wardha </option>
<option value="Ahmednagar">Ahmednagar </option>
<option value="Dhule">Dhule </option>
<option value="Jalgaon">Jalgaon </option>
<option value="Nandurbar">Nandurbar </option>
<option value="Nashik">Nashik </option>
<option value="Kolhapur">Kolhapur </option>
<option value="Pune">Pune </option>
<option value="Sangli">Sangli </option>
<option value="Satara">Satara </option>
<option value="Solapur">Solapur </option>
</datalist>

<label for="district"><b>Select Event Type :-</b></label>
<select  id="event_type" name="event_type">
<option>Select</option>
<option>Departmental Event</option>
<option>Creative Event</option>
<option>Online Event</option>
<option>Robotics Event</option>
<option>Gaming Zone</option>
<option>Exhibition</option>
</select><b id="event_type_error" style="color:red"></b>

<div style="display:none" id="event_department">
<label for="event_department"><b>Select Department of Event :-</b></label>
<select id="selected_dept" name="event_department">
<option>select</option>
<option>CODESTER</option>
<option>TEXPLORER</option>
<option>CENFEST</option>
<option>MECHATRON</option>
<option>CONFERENCE</option>
<option>ELECTROMA</option>
<option>CHEMTREK</option>
</select>
<b style="color:red" id="department_error"></b>
<div id="events">

</div>
</div>
<div id="other_events">
</div>
<b style="color:red" id="event_error"></b>

<hr>
<b id="error"></b>
<button type="submit" class="registerbtn">Register</button>
</div>
</form>
<!-- FORM FOR SOLO EVENT -->



<!-- FORM FOR TEAM EVENT -->
<form id="team" style="display:none" action="/action_page.php">
<div style= font-family:LittleLordFontleroyNF class="container">
<hr>

<label for="team_name"><b>Team Name :-</b></label>
<input autocomplete="off" type="text" placeholder="Enter Team Name" name="team_name" required>

<label for="leader_name"><b>Leader Name :-</b></label>
<input autocomplete="off" type="text" placeholder="Enter Leader Name" name="leader_name" required>

<label for="email"><b>Leader Email :-</b></label>
<input autocomplete="off" type="email" placeholder="Enter Leader Email" name="email" required>

<label for="mobile_number"><b>Leader Mobile Number :-</b></label>
<input autocomplete="off" type="text"  pattern="[0-9]{10}" placeholder="Enter Leader Mobile Number" name="mnumber" required>

<label for="no_of_players"><b>Number of Players :-</b></label>
<select id='no_of_players' onchange="add_players()" name="no_of_players">
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
</select>
<div id="players">
<label for="player1"><b>Player 1 :-</b></label>
<input autocomplete="off" type="text" placeholder="Player 1 Name" name="player1" required>
<label for="player2"><b>Player 2 :-</b></label>
<input autocomplete="off" type="text" placeholder="Player 2 Name" name="player2" required>
</div>
<label for="college"><b>College Name :-</b></label>
<input autocomplete="off" list="college" type="text" placeholder="Enter College " name="college" required>
<datalist id="college" style="width: 100px;">
<option>Government College of Engineering, Amravati </option>
<option>Sant Gadge Baba Amravati University,Amravati </option>
<option>Shri Sant Gajanan Maharaj College of Engineering,Shegaon </option>
<option>Prof. Ram Meghe Institute of Technology & Research, Amravati </option>
<option>P. R. Pote (Patil) Education & Welfare Trust's Group of Institution(Integrated Campus), Amravati </option>
<option>Sipna Shikshan Prasarak Mandal College of Engineering & Technology, Amravati </option>
<option>Shri Shivaji Education Society's College of Engineering and Technology, Akola </option>
<option>Janata Shikshan Prasarak Mandal’s Babasaheb Naik College Of Engineering, Pusad </option>
<option>Paramhansa Ramkrishna Maunibaba Shikshan Santha's , Anuradha Engineering College, Chikhali </option>
<option>Jawaharlal Darda Institute of Engineering and Technology, Yavatmal </option>
<option>Shri Hanuman Vyayam Prasarak Mandals College of Engineering & Technology, Amravati </option>
<option>Dr. Bhausaheb Nadurkar College of Engineering, Waghapur,Yavatmal </option>
<option>Dr.Rajendra Gode Institute of Technology & Research, Amravati </option>
<option>G.H. Raisoni college of Engineering & Management, Amravati </option>
<option>Dwarka Bahu Uddeshiya Gramin Vikas Foundation, Rajarshri Shahu College of Engineering, Buldhana </option>
<option>Shri. Dadasaheb Gawai Charitable Trust's Dr. Smt. Kamaltai Gawai Institute of Engineering & Technology, Darapur, Amravati </option>
<option>Jagadambha Bahuuddeshiya Gramin Vikas Sanstha's Jagdambha College of Engineering and Technology, Yavatmal </option>
<option>Prof Ram Meghe College of Engineering and Management, Badnera </option>
<option>Vision Buldhana Educational & Welfare Society's Pankaj Laddhad Institute of Technology & Management Studies, Yelgaon </option>
<option>P. R. Pote Patil Institute of Engineering & Research, At Kathora, Amravati </option>
<option>Sanmati Engineering College, Sawargaon Barde, Washim </option>
<option>Padmashri Dr. V.B. Kolte College of Engineering, Malkapur, Buldhana </option>
<option>Mauli Group of Institutions, College of Engineering and Technology, Shegaon. </option>
<option>Siddhivinayak Technical Campus, School of Engineering & Research Technology, Shirasgon, Nile </option>
<option>Manav School of Engineering & Technology, Gut No. Nagpur Surat Highway, NH No. 6 Tal.Vyala, Balapur, Akola, </option>
<option>Government College of Engineering, Aurangabad </option>
<option>Everest Education Society, Group of Institutions (Integrated Campus), Ohar </option>
<option>Maharashtra College of Engineering, Nilanga </option>
<option>Nagnathappa Halge Engineering College, Parli, Beed </option>
<option>Matsyodari Shikshan Sansatha's College of Engineering and Technology, Jalna </option>
<option>Shri Sai Samajik Vikas Santha's Shri Sai Colllege of Engineering, Paddari Village Tal. & Dist. Aurangabad </option>
<option>Adarsh Shikshan Prasarak Mandal's K. T. Patil College of Engineering and Technology, Osmanabad </option>
<option>International Centre of Excellence in Engineering & Management, Aurangabad. </option>
<option>Gramin College of Engineering, Vishnupuri, Nanded </option>
<option>Veermata Jijabai Technological Institute(VJTI), Matunga, Mumbai </option>
<option>Sardar Patel College of Engineering, Andheri </option>
<option>Usha Mittal Institute of Technology SNDT Women's University, Mumbai </option>
<option>Institute of Chemical Technology, Matunga, Mumbai </option>
<option>Manjara Charitable Trust's Rajiv Gandhi Institute of Technology, Mumbai </option>
<option>Vidyalankar Institute of Technology,Wadala, Mumbai </option>
<option>Jawahar Education Society's Annasaheb Chudaman Patil College of Engineering,Kharghar, Navi Mumbai </option>
<option>Mahavir Education Trust's Shah & Anchor Kutchhi Engineering College, Mumbai </option>
<option>Saraswati Education Society's Saraswati College of Engineering,Kharghar Navi Mumbai </option>
<option>Ramrao Adik Edu Soc, Ramarao Adik Institute of Tech., Navi Mumbai </option>
<option>M.G.M.'s College of Engineering and Technology, Kamothe, Navi Mumbai </option>
<option>Thakur College of Engineering and Technology, Kandivali, Mumbai </option>
<option>K.J.Somaiya College of Engineering, Vidyavihar, Mumbai </option>
<option>Thadomal Shahani Engineering College, Bandra, Mumbai </option>
<option>College of Engineering ,Pune</option>
<option>Anjuman-I-Islam's M.H. Saboo Siddik College of Engineering, Byculla, Mumbai </option>
<option>Fr. Conceicao Rodrigues College of Engineering, Bandra,Mumbai </option>
<option>Vivekanand Education Society's Institute of Technology, Chembur, Mumbai </option>
<option>N.Y.S.S.'s Datta Meghe College of Engineering, Airoli, Navi Mumbai </option>
<option>Padmabhushan Vasantdada Patil Pratishthans College of Engineering, Sion,Mumbai </option>
<option>Bharati Vidyapeeth College of Engineering, Navi Mumbai </option>
<option>Terna Engineering College, Nerul, Navi Mumbai </option>
<option>Smt. Indira Gandhi College of Engineering, Navi Mumbai </option>
<option>Shivajirao S. Jondhale College of Engineering, Dombivali,Mumbai </option>
<option>Vidyavardhini's College of Engineering and Technology, Vasai </option>
<option>Lokmanya Tilak College of Engineering, Kopar Khairane, Navi Mumbai </option>
<option>Agnel Charities' FR. C. Rodrigues Institute of Technology, Vashi, Navi Mumbai </option>
<option>Konkan Gyanpeeth College of Engineering, Karjat </option>
<option>Shri Vile Parle Kelvani Mandal's Dwarkadas J. Sanghvi College of Engineering, Vile Parle,Mumbai </option>
<option>Hope Foundation and research center's Finolex Academy of Management and Technology, Ratnagiri </option>
<option>Rizvi Education Society's Rizvi College of Engineering, Bandra,Mumbai </option>
<option>Rajendra Mane College of Engineering & Technology Ambav Deorukh </option>
<option>Atharva College of Engineering,Malad(West),Mumbai </option>
<option>St. Francis Institute of Technology,Borivali, Mumbai </option>
<option>S.S.P.M.'s College of Engineering, Kankavli </option>
<option>Mahatma Education Society's Pillai College of Engineering, New Panvel </option>
<option>K J Somaiya Institute of Engineering and Information Technology, Sion, Mumbai </option>
<option>Excelsior Education Society's K.C. College of Engineering and Management Studies and Research, Kopri, Thane (E) </option>
<option>S.I.E.S. Graduate School of Technology, Nerul, Navi Mumbai </option>
<option>WATUMULL INSTITUTE OF ELECTRONICS ENGINEERING & COMPUTER TECHNOLOGY, ULHASNAGAR </option>
<option>Xavier Institute Of Engineering C/O Xavier Technical Institute,Mahim,Mumbai </option>
<option>Bhartiya Vidya Bhavan's Sardar Patel Institute of Technology , Andheri, Mumbai </option>
<option>Gharda Foundation's Gharda Institute of Technology,Khed, Ratnagiri </option>
<option>Vighnaharata Trust's Shivajirao S. Jondhale College of Engineering & Technology, Shahapur, Asangaon, Dist Thane </option>
<option>Aldel Education Trust's St. John College of Engineering & Management, Vevoor, Palghar </option>
<option>Koti Vidya Charitable Trust's Smt. Alamuri Ratnamala Institute of Engineering and Technology, Sapgaon, Tal. Shahapur </option>
<option>Saraswati Education Society, Yadavrao Tasgaonkar College of Engineering and Management, Nasarapur, Chandai, Karjat </option>
<option>Late Shri. Vishnu Waman Thakur Charitable Trust, Viva Institute of Technology, Shirgaon </option>
<option>Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar </option>
<option>Mahatma Education Society's Pillai HOC College of Engineering & Technology, Tal. Khalapur. Dist. Raigad </option>
<option>Leela Education Society, G.V. Acharya Institute of Engineering and Technology, Shelu, Karjat </option>
<option>Bharat College of Engineering, Kanhor, Badlapur(W) </option>
<option>Dilkap Research Institute Of Engineering and Management Studies, At.Mamdapur, Post- Neral, Tal- Karjat, Mumbai </option>
<option>Shree L.R. Tiwari College of Engineering, Mira Road, Mumbai </option>
<option>B.R. Harne College of Engineering & Technology, Karav, Tal-Ambernath. </option>
<option>Anjuman-I-Islam's Kalsekar Technical Campus, Panvel </option>
<option>Metropolitan Institute of Technology & Management, Sukhalwad, Sindhudurg. </option>
<option>Vishvatmak Jangli Maharaj Ashram Trust's Vishvatmak Om Gurudev College of Engineering, Mohili-Aghai, Shahpur. </option>
<option>G.M.Vedak Institute of Technology, Tala, Raigad. </option>
<option>Universal College of Engineering,Kaman Dist. Palghar </option>
<option>VPM's Maharshi Parshuram College of Engineering, Velneshwar, Ratnagiri. </option>
<option>Ideal Institute of Technology, Wada, Dist.Thane </option>
<option>Vishwaniketan's Institute of Management Entrepreneurship and Engineering Technology(i MEET), Khalapur Dist Raigad </option>
<option>New Horizon Institute of Technology & Management, Thane </option>
<option>A. P. Shah Institute of Technology, Thane </option>
<option>Chhartrapati Shivaji Maharaj Institute of Technology, Shedung, Panvel </option>
<option>Indala College Of Engineering, Bapsai Tal.Kalyan </option>
<option>Government College of Engineering, Chandrapur </option>
<option>Laxminarayan Institute of Technology, Nagpur </option>
<option>Government College of Engineering, Nagpur </option>
<option>Kavi Kulguru Institute of Technology & Science, Ramtek </option>
<option>Shri Ramdeobaba College of Engineering and Management, Nagpur </option>
<option>Ankush Shikshan Sanstha's G.H.Raisoni College of Engineering, Nagpur </option>
<option>Bapurao Deshmukh College of Engineering, Sevagram </option>
<option>Lokmanya Tilak Jankalyan Shikshan Sanstha, Priyadarshani College of Engineering, Nagpur </option>
<option>Sanmarg Shikshan Sanstha's Smt. Radhikatai Pandav College of Engineering, Nagpur </option>
<option>Guru Nanak Institute of Engineering & Technology,Kalmeshwar, Nagpur </option>
<option>Amar Seva Mandal's Shree Govindrao Vanjari College of Engineering & Technology, Nagpur </option>
<option>Lokmanya Tilak Jankalyan Shikshan Sastha, Priyadarshini J. L. College Of Engineering, Nagpur </option>
<option>Sir Shantilal Badjate Charitable Trust's S. B. Jain Institute of technology, Management & Research, Nagpur </option>
<option>Samridhi Sarwajanik Charitable Trust, Jhulelal Institute of Technology, Nagpur </option>
<option>Shriram Gram Vikas Shikshan Sanstha, Vilasrao Deshmukh College of Engineering and Technology, Nagpur </option>
<option>Ankush Shikshan Sanstha's G. H. Raisoni Institute of Engineering & Technology, Nagpur </option>
<option>Sanmarg Shikshan Sanstha, Mandukarrao Pandav College of Engineering, Bhandara </option>
<option>Shri. Sai Shikshan Sanstha, Nagpur Institute of Technology, Nagpur </option>
<option>Wainganga College of Engineering and Management, Dongargaon, Nagpur </option>
<option>K.D.K. College of Engineering, Nagpur </option>
<option>Vidarbha Bahu-Uddeshiya Shikshan Sanstha's Tulshiramji Gaikwad Patil College of Engineering & Technology, Nagpur </option>
<option>Yeshwantrao Chavan College of Engineering,Wanadongri, Nagpur </option>
<option>Lokmanya Tilak Jankalyan Shikshan Sanstha's , Priyadarshini Institute of Engineering and Technology, Nagpur </option>
<option>Anjuman College of Engineering & Technology, Nagpur </option>
<option>ST. Vincent Pallotti College of Engineering & Technology, Nagpur </option>
<option>JMSS Shri Shankarprasad Agnihotri College of Engineering, Wardha </option>
<option>Priyadarshini Bhagwati College of Engineering, Harpur Nagar, Umred Road,Nagpur </option>
<option>Rajiv Gandhi College of Engineering & Research, Hingna Road, Nagpur </option>
<option>Lokmanya Tilak Jankalyan Shiksan Sanstha, Priyadarshini Indira Gandhi College of Engineering, Nagpur </option>
<option>Sarvasiddhanta Education Soc's Nuva College of Engineering and Technology, Nagpur </option>
<option>Datta Meghe Institute of Medical Science's Datta Meghe Institute of Engineering & Technology & Research, Savangi (Meghe) </option>
<option>Dr. Babasaheb Ambedkar College of Engineering and Research, Wanadongri, Nagpur </option>
<option>Maitraya Education Society, Nagarjuna Institute of Engineering Technology & Management, Nagpur </option>
<option>K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur </option>
<option>Vidharbha Bahu uddeshiya Shikshan Sanstha's Abha Gaikwad – Patil College of Engineering, Nagpur </option>
<option>Gurunanak Educational Society's Gurunanak Institute of Technology, Nagpur </option>
<option>Jai Mahakali Shikshan Sanstha, Agnihotri College of Engineering, Sindhi(Meghe) </option>
<option>V M Institute of Engineering and Technology, Dongargaon, Nagpur </option>
<option>Gondia Education Society's Manoharbhai Patel Institute Of Engineering & Technology, Shahapur, Bhandara </option>
<option>Cummins College of Engineering For Women, Sukhali (Gupchup), Tal. Hingna Hingna Nagpur </option>
<option>G.H.Raisoni Academy of Engineering & Technology, Nagpur </option>
<option>Suryodaya College of Engineering & Technology, Nagpur </option>
<option>University Institute of Chemical Technology, North Maharashtra University, Jalgaon </option>
<option>Government College of Engineering, Jalgaon </option>
<option>Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon </option>
<option>Shri Gulabrao Deokar College of Engineering, Jalgaon </option>
<option>Nashik District Maratha Vidya Prasarak Samaj's Karmaveer Adv.Babaurao Ganpatrao Thakare College of Engineering, Nashik </option>
<option>Sandip Foundation, Sandip Institute of Technology and Research Centre, Mahiravani, Nashik </option>
<option>K. K. Wagh Institute of Engineering Education and Research, Nashik </option>
<option>Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon </option>
<option>Pravara Rural Education Society's Sir Visvesvaraya Institute of Technology, Chincholi Dist. Nashik </option>
<option>Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik </option>
<option>Pravara Rural College of Engineering, Loni, Pravaranagar, Ahmednagar. </option>
<option>MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik. </option>
<option>G. H. Raisoni Institute of Business Management,Jalgaon </option>
<option>Sanjivani Rural Education Society's Sanjivani College of Engineering, Kopargaon </option>
<option>Dr. Vithalrao Vikhe Patil College of Engineering, Ahmednagar </option>
<option>Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner </option>
<option>Nagaon Education Society's Gangamai College of Engineering, Nagaon, Tal Dist Dhule </option>
<option>SNJB's Late Sau. Kantabai Bhavarlalji Jain College of Engineering, (Jain Gurukul), Neminagar,Chandwad,(Nashik) </option>
<option>G. H. Raisoni College of Engineering and Management, Ahmednagar </option>
<option>Matoshri College of Engineering and Research Centre, Eklahare, Nashik </option>
<option>Vishwabharati Academy's College of Engineering, Ahmednagar </option>
<option>Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik </option>
<option>Kalyani Charitable Trust, Late Gambhirrao Natuba Sapkal College of Engineering, Anjaneri, Trimbakeshwar Road, Nashik </option>
<option>Shri Chhatrapati Shivaji College of Engineering, (Rahuri Factory), Tal.Rahuri, Dist.Ahmednagar </option>
<option>Amruta Vaishnavi Education & Welfare Trust's Shatabdi Institute of Engineering & Research, Agaskhind Tal. Sinnar </option>
<option>Hon. Shri. Babanrao Pachpute Vichardhara Trust, Group of Institutions (Integrated Campus)-Parikrama, Kashti Shrigondha, </option>
<option>Jamia Institute Of Engineering And Management Studies, Akkalkuwa </option>
<option>Pune Vidyarthi Griha's College Of Engineering, Nashik </option>
<option>Sandip Foundation's, Sandip Institute of Engineering & Management, Nashik </option>
<option>Adsul's Technical Campus, Chas Dist. Ahmednagar </option>
<option>Shri. Jaykumar Rawal Institute of Technology, Dondaicha. </option>
<option>Ahmednagar Jilha Maratha Vidya Prasarak Samajache, Shri. Chhatrapati Shivaji Maharaj College of Engineering, Nepti </option>
<option>K.V.N. Naik S. P. Sansth's Loknete Gopinathji Munde Institute of Engineering Education & Research, Nashik. </option>
<option>College of Engineering and Technology ,North Maharashtra Knowledge City, Jalgaon </option>
<option>Sanghavi College of Engineering, Varvandi, Nashik. </option>
<option>Jawahar Education Society's Institute of Technology, Management & Research, Nashik. </option>
<option>Vidya Niketan College of Engineering, Bota Sangamner </option>
<option>Rajiv Gandhi College of Engineering, At Post Karjule Hariya Tal.Parner, Dist.Ahmednagar </option>
<option>Maulana Mukhtar Ahmad Nadvi Technical Campus, Malegaon. </option>
<option>Guru Gobind Singh College of Engineering & Research Centre, Nashik. </option>
<option>Government College of Engineering & Research, Avasari Khurd </option>
<option>Government College of Engineering, Karad </option>
<option>TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune </option>
<option>Genba Sopanrao Moze Trust Parvatibai Genba Moze College of Engineering,Wagholi, Pune </option>
<option>Progressive Education Society's Modern College of Engineering, Pune </option>
<option>Genba Sopanrao Moze College of Engineering, Baner-Balewadi, Pune </option>
<option>JSPM'S Jaywantrao Sawant College of Engineering,Pune </option>
<option>MIT Academy of Engineering,Alandi, Pune </option>
<option>Choudhary Attar Singh Yadav Memorial Trust,Siddhant College of Engineering, Maval </option>
<option>G.H.Raisoni College of Engineering & Management, Wagholi, Pune </option>
<option>Marathwada Mitra Mandal's College of Engineering, Karvenagar, Pune </option>
<option>JSPM's Imperial College of Engineering and Research, Wagholi, Pune </option>
<option>Pimpri Chinchwad Education Trust, Pimpri Chinchwad College of Engineering, Pune </option>
<option>G. H.Raisoni Institute of Engineering and Technology, Wagholi, Pune </option>
<option>Sinhgad College of Engineering, Vadgaon (BK), Pune </option>
<option>Sinhgad Technical Education Society's Smt. Kashibai Navale College of Engineering,Vadgaon,Pune </option>
<option>Indira College of Engineering & Management, Pune </option>
<option>Sinhgad Technical Education Society, Sinhgad Institute of Technology and Science, Narhe (Ambegaon) </option>
<option>Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima </option>
<option>K. J.'s Educational Institut Trinity College of Engineering and Research, Pisoli, Haveli </option>
<option>Sinhagad Institute of Technology, Lonavala </option>
<option>Sinhgad Academy of Engineering, Kondhwa (BK) Kondhwa-Saswad Road, Pune </option>
<option>. 1- Marathwada Mitra Mandal's Institute of Technology, Lohgaon, Pune </option>
<option>Pune District Education Association's College of Engineering, Pune </option>
<option>Dr. D. Y. Patil Vidya Pratishthan Society Dr .D. Y. Patil Institute of Engineering & Technology, Pimpri,Pune </option>
<option>Dattajirao Kadam Technical Education Society's Textile & Engineering Institute, Ichalkaranji. </option>
<option>D.Y. Patil College of Engineering and Technology, Kolhapur </option>
<option>Kolhapur Institute of Technology's College of Engineering(Autonomous), Kolhapur </option>
<option>Tatyasaheb Kore Institute of Engineering and Technology, Warananagar </option>
<option>Pune Institute of Computer Technology, Dhankavdi, Pune </option>
<option>Dr. D. Y. Patil Pratishthan's D.Y.Patil College of Engineering Akurdi, Pune </option>
<option>Pune Vidyarthi Griha's College of Engineering and Technology, Pune </option>
<option>Shivnagar Vidya Prasarak Mandal's College of Engineering, Malegaon-Baramati </option>
<option>Dr. J. J. Magdum Charitable Trust's Dr. J.J. Magdum College of Engineering, Jaysingpur </option>
<option>All India Shri Shivaji Memorial Society's College of Engineering, Pune </option>
<option>Modern Education Society's College of Engineering, Pune </option>
<option>All India Shri Shivaji Memorial Society's Institute of Information Technology,Pune </option>
<option>Annasaheb Dange College of Engineering and Technology, Ashta, Sangli </option>
<option>Vidya Pratishthan's Kamalnayan Bajaj Institute of Engineering & Technology, Baramati Dist.Pune </option>
<option>Bharati Vidyapeeth's College of Engineering for Women, Katraj, Dhankawadi, Pune </option>
<option>Bharati Vidyapeeth's College of Engineering, Kolhapur </option>
<option>Zeal Education Society's Zeal College of Engineering & Reserch, Narhe, Pune </option>
<option>Dr. Ashok Gujar Technical Institute's Dr. Daulatrao Aher College of Engineering, Karad </option>
<option>Dhole Patil Education Society, Dhole Patil College of Engineering, Wagholi, Tal. Haveli </option>
<option>Nutan Maharashtra Vidya Prasarak Mandal, Nutan Maharashtra Institute of Engineering &Technology, Talegaon station, Pune </option>
<option>Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi </option>
<option>Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapur </option>
<option>K.J.'s Educational Institute's K.J.College of Engineering & Management Research, Pisoli </option>
<option>Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi </option>
<option>D. Y. Patil College of Engineering, Ambi, Talegaon, Maval </option>
<option>Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor </option>
<option>Alard Charitable Trust's Alard College of Engineering and Management, Pune </option>
<option>Jaihind College Of Engineering,Kuran </option>
<option>D. Y. Patil Institute of Engineering and Technology, Ambi </option>
<option>I.S.B.& M. School of Technology, Nande Village </option>
<option>Universal College of Engineering & Research, Sasewadi </option>
<option>Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune </option>
<option>Navsahyadri Education Society's Group of Institutions </option>
<option>KJEI's Trinity Academy of Engineering, Yewalewadi, Pune </option>
<option>Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune </option>
<option>TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune </option>
<option>Dr. D. Y. Patil School OF Engineering, Lohegaon, Pune </option>
<option>International Institute of Information Technology (I²IT), Pune. </option>
<option>JSPM Narhe Technical Campus, Pune. </option>
<option>Sahyadri Valley College of Engineering & Technology, Rajuri, Pune. </option>
<option>Shree Ramchandra College of Engineering, Lonikand,Pune </option>
<option>Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune. </option>
<option>P.K. Technical Campus, Pune. </option>
<option>Rasiklal M. Dhariwal Sinhgad Technical Institutes Campus, Warje, Pune. </option>
<option>SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune. </option>
<option>NBN Sinhgad Technical Institutes Campus, Pune </option>
<option>D.Y.Patil Education Society's,D.Y.Patil Technical Campus, Faculty of Engineering & Faculty of Management,Talsande,Kolhapur. </option>
<option>Dr. D. Y. Patil Educational Academy's, D.Y.Patil School of Engineering Academy, Ambi </option>
<option>Anantrao Pawar College of Engineering & Research, Pune </option>
<option>Shri.Someshwar Shikshan Prasarak Mandals, Someshwar Engineering College, Someshwar Nagar </option>
<option>Bharati Vidyapeeth's College of Engineering,Lavale, Pune </option>
<option>Dr. D.Y.Patil Institute of Engineering, Management & Reseach, Akurdi, Pune </option>
<option>Sant Gajanan Maharaj College of Engineering, Gadhinglaj </option>
<option>Keystone School of Engineering, Pune </option>
<option>Vidya Prasarini Sabha's College of Engineering & Technology, Lonavala </option>
<option>Pimpri Chinchwad Education Trust's Pimpri Chinchwad College Of Engineering And Research, Ravet </option>
<option>Dr.D.Y.Patil College Of Engineering & Innovation,Talegaon </option>
<option>Dr. D Y Patil Pratishthan's College of Engineering, Kolhapur </option>
<option>Dr. A. D. Shinde College Of Engineering, Tal.Gadhinglaj, Kolhapur </option>
<option>Government Engineering College, Yavatmal </option>
<option>Dhamangaon Education Society's College of Engineering and Technology, Dhamangaon </option>
<option>Shri Guru Gobind Singhji Institute of Engineering and Technology, Nanded </option>
<option>University Department of Chemical Technology, Aurangabad </option>
<option>Shree Yash Pratishthan, Shreeyash College of Engineering and Technology, Aurangabad </option>
<option>G. S. Mandal's Maharashtra Institute of Technology, Aurangabad </option>
<option>Deogiri Institute of Engineering and Management Studies, Aurangabad </option>
<option>Matoshri Pratishan's Group of Institutions (Integrated Campus), Kupsarwadi , Nanded </option>
<option>Gramodyogik Shikshan Mandal's Marathwada Institute of Technology, Aurangabad </option>
<option>Mahatma Gandhi Missions College of Engineering, Hingoli Rd, Nanded. </option>
<option>M.S. Bidve Engineering College, Latur </option>
<option>Terna Public Charitable Trust's College of Engineering, Osmanabad </option>
<option>Shree Tuljabhavani College of Engineering, Tuljapur </option>
<option>M.G.M.'s Jawaharlal Nehru Engineering College, Aurangabad </option>
<option>Mahatma Basaweshwar Education Society's College of Engineering, Ambejogai </option>
<option>Peoples Education Society's College of Engineering, Aurangabad </option>
<option>Hi-Tech Institute of Technology, Aurangabad </option>
<option>Aditya Engineering College , Beed </option>
<option>Aurangabad College of Engineering, Naygaon Savangi, Aurangabad </option>
<option>Marathwada Shikshan Prasarak Mandal's Shri Shivaji Institute of Engineering and Management Studies, Parbhani </option>
<option>Vilasrao Deshmukh Foundation Group of Institutions, Latur </option>
<option>STMEI's Sandipani Technical Campus-Faculty of Engineering, Latur. </option>
<option>CSMSS Chh. Shahu College of Engineering, Aurangabad </option>
<option>Dr. Babasaheb Ambedkar Technological University, Lonere </option>
<option>Ankush Shikshan Sanstha's G.H.Raisoni College of Engineering, Nagpur </option>
<option>Jaidev Education Society, J D College of Engineering and Management, Nagpur </option>
<option>Rajiv Gandhi College of Engineering Research & Technology Chandrapur </option>
<option>Krushi Jivan Vikas Pratishthan, Ballarpur Institute of Technology, Mouza Bamni </option>
<option>M.D. Yergude Memorial Shikshan Prasarak Mandal's Shri Sai College of Engineering & Technology, Badravati </option>
<option>Bajaj Institute of Technology, Wardha </option>
<option>Shri Shivaji Vidya Prasarak Sanstha's Late Bapusaheb Shivaji Rao Deore College of Engineering,Dhule </option>
<option>K. C. E. Societys College of Engineering and Information Technology, Jalgaon </option>
<option>P.S.G.V.P. Mandal's D.N. Patel College of Engineering, Shahada, Dist. Nandurbar </option>
<option>T.M.E. Society's J.T.Mahajan College of Engineering, Faizpur </option>
<option>Hindi Seva Mandal's Shri Sant Gadgebaba College of Engineering & Technology, Bhusawal </option>
<option>Godavari Foundation's Godavari College Of Engineering, Jalgaon </option>
<option>R. C. Patel Institute of Technology, Shirpur </option>
<option>Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule </option>
<option>College of Engineering, Pune </option>
<option>Walchand College of Engineering, Sangli </option>
<option>Department of Technology, Shivaji University, Kolhapur </option>
<option>Jaywant Shikshan Prasarak Mandal's,Rajarshi Shahu College of Engineering, Tathawade, Pune </option>
<option>K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangli </option>
<option>Shri. Balasaheb Mane Prasarak Mandals, Ashokrao Mane Group of Institutions, Kolhapur </option>
<option>KSGBS's Bharat- Ratna Indira Gandhi College of Engineering, Kegaon, Solapur </option>
<option>Shri Vithal Education and Research Institute's College of Engineering, Pandharpur </option>
<option>Pradnya Niketan Education Society's Nagesh Karajagi Orchid College of Engineering & Technology, Solapur </option>
<option>Walchand Institute of Technology, Solapur </option>
<option>Tatyasaheb Kore Institute of Engineering and Technology, Warananagar </option>
<option>Shetkari Shikshan Mandal's Pad. Vasantraodada Patil Institute of Technology, Budhgaon, Sangli </option>
<option>Rayat Shikshan Sanstha's Karmaveer Bhaurao Patil College of Engineering, Satara </option>
<option>Bansilal Ramnath Agarawal Charitable Trust's Vishwakarma Institute of Technology, Bibwewadi, Pune </option>
<option>MKSSS's Cummins College of Engineering for Women, Karvenagar,Pune </option>
<option>B.R.A.C.T's Vishwakarma Institute of Information Technology, Kondhwa (Bk.), Pune </option>
<option>Kai Amdar Bramhadevdada Mane Shikshan & Samajik Prathistan's Bramhadevdada Mane Institute of Technology, Solapur </option>
<option>Loknete Hanumantrao Charitable Trust's Adarsh Institute of Technology and Research Centre, Vita,Sangli </option>
<option>S.D.N.C.R.E.S'S.Late Narayandas Bhawandas Chhabada Institute of Engineering & Technology, Satara </option>
<option>Shanti Education Society, A.G. Patil Institute of Technology, Soregaon, Solapur(North) </option>
<option>Jaywant College of Engineering & Management, Kille Macchindragad Tal. Walva </option>
<option>Holy-Wood Academy's Sanjeevan Engineering and Technology Institute, Panhala </option>
<option>Sharad Institute of Technology College of Engineering, Yadrav(Ichalkaranji) </option>
<option>Abhinav Education Society's College of Engineering and Technology (Degree), Wadwadi </option>
<option>Vidya Vikas Pratishthan Institute of Engineering and Technology, Solapur </option>
<option>Shri Pandurang Pratishtan, Karmayogi Engineering College, Shelve, Pandharpur </option>
<option>Nutan College of Engineering and Research, Talegaon Dabhade Tal. Maval, Pune </option>
<option>Shree Santkrupa Shikshan Sanstha, Shree Santkrupa Institute Of Engineering & Technology, Karad </option>
<option>Samarth Education Trust's Arvind Gavali College Of Engineering Panwalewadi, Varye,Satara. </option>
<option>N. B. Navale Sinhgad College of Engineering, Kegaon, solapur </option>
<option>S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur </option>
<option>Shri. Ambabai Talim Sanstha's Sanjay Bhokare Group of Institutes, Miraj </option>
<option>Fabtech Technical Campus College of Engineering and Research, Sangola </option>
<option>Yashoda Technical Campus, Wadhe, Satara. </option>
<option>Nanasaheb Mahadik College of Engineering,Walwa, Sangli. </option>
<option>Phaltan Education Society's College of Engineering Thakurki Tal- Phaltan Dist-Satara </option>
<option>Bhagwant Institute of Technology, Barshi </option>
<option>Sahakar Maharshee Shankarrao Mohite Patil Institute of Technology & Research, Akluj </option>
<option>Dnyanshree Institute Engineering and Technology, Satara </option>
<option>MAEER's MIT College of Railway Engineering and Research, Jamgaon, Barshi </option>
<option>Shree Siddheshwar Women's College Of Engineering Solapur. </option>
</datalist>
<p style="color:red;display:none">*please select college</p>
<label for="district"><b>District :-</b></label>
<input autocomplete="off" list="district" type="text" placeholder="Enter District " name="district" required>
<datalist id="district" style="width: 100px;">
<option value="Nanded">Nanded</option>
<option value="Akola">Akola </option>
<option value="Amravati">Amravati </option>
<option value="Buldana">Buldana </option>
<option value="Yavatmal">Yavatmal </option>
<option value="Washim">Washim </option>
<option value="Aurangabad">Aurangabad </option>
<option value="Beed">Beed </option>
<option value="Jalna">Jalna </option>
<option value="Osmanabad">Osmanabad </option>
<option value="Latur">Latur </option>
<option value="Parbhani">Parbhani </option>
<option value="Hingoli">Hingoli </option>
<option value="Mumbai City">Mumbai City </option>
<option value="Mumbai Suburban">Mumbai Suburban </option>
<option value="Thane">Thane </option>
<option value="Palghar">Palghar </option>
<option value="Raigad">Raigad </option>
<option value="Ratnagiri">Ratnagiri </option>
<option value="Sindhudurg">Sindhudurg </option>
<option value="Mumbai">Mumbai </option>
<option value="Bhandara">Bhandara </option>
<option value="Chandrapur">Chandrapur </option>
<option value="Gadchiroli">Gadchiroli </option>
<option value="Gondia">Gondia </option>
<option value="Nagpur">Nagpur </option>
<option value="Wardha">Wardha </option>
<option value="Ahmednagar">Ahmednagar </option>
<option value="Dhule">Dhule </option>
<option value="Jalgaon">Jalgaon </option>
<option value="Nandurbar">Nandurbar </option>
<option value="Nashik">Nashik </option>
<option value="Kolhapur">Kolhapur </option>
<option value="Pune">Pune </option>
<option value="Sangli">Sangli </option>
<option value="Satara">Satara </option>
<option value="Solapur">Solapur </option>
</datalist>
<hr>
<label for="district"><b>Select Event Type :-</b></label>
<select  id="t_event_type" name="event_type">
<option>Select</option>
<option>Departmental Event</option>
<option>Creative Event</option>
<option>Online Event</option>
<option>Robotics Event</option>
<option>Gaming Zone</option>
<option>Exhibition</option>
</select>
<b id="t_event_type_error" style="color:red"></b>
<div style="display:none" id="t_event_department">
<label for="event_department"><b>Select Department of Event :-</b></label>
<select id="t_selected_dept" name="event_department">
<option>select</option>
<option>CODESTER</option>
<option>TEXPLORER</option>
<option>CENFEST</option>
<option>MECHATRON</option>
<option>CONFERENCE</option>
<option>ELECTROMA</option>
<option>CHEMTREK</option>
</select>
<b id="t_department_error" style="color:red"></b>

<div id="t_events">

</div>
</div>
<div id="t_other_events">

</div>
<b id="t_event_error" style="color:red"></b>
<b style="color:red" id="t_event_error"></b>

<hr>
<b id="t_error"></b>
<button type="submit" class="registerbtn">Register</button>
</div>

</form>
<!-- FORM FOR TEAM EVENT -->
</body>
</html>
