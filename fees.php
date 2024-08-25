
<?php include 'connection.php';?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Login Form</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Francois+One&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Bree Serif', serif;
        }  .all {
            margin-top: 90px;
        }
  
        nav ul {
    list-style: none;
}

nav ul li a {
    text-decoration: none;
    color: #333;
}



header {
    background-color: #fff;
    padding: 0px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    z-index: 999;
}

nav ul {
    display: flex;
    align-items: center;
}

nav li {
    margin-right: 20px;
}

nav a {
    font-size: 1rem;    font-size: 0.9rem;
    color: #555;
    padding: 10px;
    transition: all 0.2s ease-in-out;
}

nav a:hover {
    color: #007bff;
    background-color: #f9f9f9;
    border-radius: 5px;
}




a {
	outline: none;
}

.navbar-container {
	

}

.navbar-container ul {
  margin: 6px 0px;
	/* margin: 0;
	padding: 0;
	text-align: right; */
	/* display: inline-block;
	vertical-align: middle; */
}

.navbar-container ul li {
	/* display: inline-block; */
	/* font-size: 16px; */
}

.navbar-container ul li a {
	
	text-decoration: none;
	display: inline-block;	
	
	transition: color 0.5s;
}

.navbar-container ul li .underline {
	height: 3px;
	background-color: transparent;
	width: 0%;
	transition: width 0.2s, background-color 0.5s;
	margin: 0 auto;
}

.navbar-container ul li.active-link .underline {
	width: 100%;
	background-color: blue;
}

.navbar-container ul li:hover .underline {
	background-color: blue;
	width: 100%;
}

.navbar-container ul li:hover a {
}

.navbar-container ul li:active a {
	transition: none;
	color: blue;
}

.navbar-container ul li:active .underline {
	transition: none;
	background-color: #007bff;
}

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
/* reciptWrapper max-w-[1200px] mx-auto border shadow-md py-2 my-10 */
.reciptWrapper{
    max-width : 1200px;
    margin: auto auto;
    border: 1px solid black;
    padding: 1rem 0rem;
    margin: 1rem 0rem;
}

/* reciptGenerate max-w-[500px] flex flex-wrap gap-2 py-5 p-2 */
.reciptGenerate{
    max-width : 500px;
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    padding: 1rem;
}
/* border border-black p-1.5 w-[90%] mx-auto sm:w-[14rem] my-3 rounded-sm */
.reciptGenerate input{
    border: 1px solid black;
    padding: 1rem;
    width: 90%;
    margin: 1rem 0.5rem;
    border-radius: .5rem;
}
/* bg-green-400 p-2 mx-1 sm:mx-2 rounded-sm px-2 my-2 text-white hover:shadow-md hover:opacity-90 */
.reciptGenerate button{
    background-color: rgb(4, 214, 4);
    padding: .4rem 2rem;
    border-radius: 0.5rem;
    margin: 0rem 1rem;
    color: white;
    border: none;
}
.reciptGenerate button:hover{
    box-shadow: 1px 1px 3px gray;
    opacity: 0.8;
}
.head1{
    /* text-center my-6 font-bold text-2xl  */
     text-align: center;
     margin: 1rem 0rem;
     font-weight: 700;
     font: 1.2rem;
}
.head2{
    /* text-blue-500 */
    color: #485bff;
}
.head3 {
    /* border-b-2 border-blue-500  */
    border-bottom: 2px solid black;
    border-color: #485bff;
}
/* .reciptPage  p-2 w-[90%] sm: mx-auto overflow-x-auto  {
     */
.reciptPage{
    padding: 1rem;
    width: 90%;
    overflow-x: auto;
    margin: auto;
}
/* recipt border border-black p-1 w-[600px] bg-slate-100 mx-auto overflow-hidden" */
.recipt {
    border: 1px solid black;
    padding: 1rem;
    width: 600px;
    background-color: rgb(233, 233, 233);
}
/* .hearWrapper font-bold border-b-2 mt-2 text-center border-black */
.hearWrapper{
    font-weight: 500;
    border-bottom: 2px solid  black ;
    margin-top: 1rem;
    text-align: center;
    margin-bottom: 1rem;
}
.minhead1{
    font-size: .9rem;
}
.minhead2{
    font-size: 1.7rem;
}
.minhead3{
    font-size: 1.4rem ;
}
/* hearWrapper font-bold my-2 flex justify-between items-center flex-wrap text-center  */
.hearWrapper1{
    font-weight: 700;
    margin: 0rem 1rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    text-align: center;

}



.print:hover {
    background-color: #333;
    color: #fff;
}

.print{

    padding: 5px 10px;
    color: white;
    text-decoration: none;
    width: 120px;
    padding: 0.5rem;
    border: 2px solid #333;
    color: #333;
    text-align: center;
    text-decoration: none;
    font-weight: bold;
    transition: background-color 0.3s ease;
    margin: 10px auto;
    margin-bottom: auto;
    margin-left:20%;
    background:white;
}


.navbar-container ul {
    margin: 6px 40px;
}
    </style>

    <link rel="stylesheet" href="recipt.css">
</head>
<body>
<header class="navbar-container">
    <nav >
        <ul>
        <li class="nav-link  " ><a href="addmission.php">New Admission</a> <div class="underline"></div></li>
      <li class="nav-link "><a href="search1.php">Search For Student</a> <div class="underline"></div></li>
      <li class="nav-link active-link"><a href="fees.php">Manage Fees</a><div class="underline"></div></li>
      <li class="nav-link"><a href="changeclass.php">Change Class</a> <div class="underline"></div></li> 
     
      <li><a href="logout.php">Logout</a><div class="underline"></div></li> 
        </ul>
    </nav>
</header>

    <div class="all">
        <div class="reciptWrapper max-w-[1200px] mx-auto border shadow-md py-2 my-10">

       
            <div class='reciptGenerate max-w-[500px] flex flex-wrap gap-2 py-5 p-2 '>
            <form method="GET" action="" autocomplete="off">  <label htmlFor="recipt" class='font-semibold'>
                    Enter Student Id :
                    <br />
                    <input name="search" type="text" class='border border-black p-1.5 w-[90%] mx-auto sm:w-[14rem] my-3 rounded-sm' />
                    <button type="submit" value="Search" class='bg-green-400 p-2 mx-1 sm:mx-2 rounded-sm px-2 my-2 text-white hover:shadow-md hover:opacity-90'>Generate</button>
                    <!-- <button class='bg-green-400 p-2 mx-2 rounded-sm px-2 text-white hover:shadow-md hover:opacity-90' type="submit" value="view">View</button> -->
                    </form>
                </label>
            </div>
            <?php
      if (isset($_GET['search'])) {
        $search = $_GET['search'];
        $query = "SELECT * FROM admissions WHERE student_id LIKE '%$search%'";

         
      $result = $conn->query($query);
      
      if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
   
      }}
     

?>
  
  <h1 class='head1 text-center my-6 font-bold text-2xl ' ><span class='head2 text-blue-500'>Reci</span><span class="head3 border-b-2 border-blue-500 ">pt</span></h1>

         
            <div id="printContent" class="reciptPage  p-2 w-[90%] sm: mx-auto overflow-x-auto  ">

                <div class="recipt border border-black p-1 w-[600px] bg-slate-100 mx-auto overflow-hidden">

                  
                    <div class="hearWrapper font-bold border-b-2 mt-2 text-center border-black">
                        <p class='minhead1 text-xs'>M.J.P.S.W.Society,Jalna's</p>
                        <h1 class='minhead2 text-3xl '>Ashlesha School</h1>
                        <p class='minhead3 text-sm'>Bhagya Nagar, Old Jalna. Ph.:02482-225851</p>
                        <p class='minhead4 text-sm'>Email: ashleshaschooljalna</p>
                        <p class='minhead5 text-sm'>Website: www.ashleshaschool.in</p>
                    </div>
                  

                 
                    <div class="hearWrapper1 font-bold my-2 flex justify-between items-center flex-wrap text-center ">
                        <label htmlFor="" class='text-sm text-black font-semibold'>
                            Recipt No:
                            <input type="number" class="Rno p-1.5 outline-none border w-[9rem] mx-2 bg-transparent" value="26726" />
                        </label>

                        <label htmlFor="" class='text-sm text-black font-semibold'>
                            Date:
                            <input type="date" class="Rno p-1.5 outline-none w-[9rem] mx-2 bg-transparent" />
                        </label>
                        <br />

                        <label htmlFor="" class='text-sm text-black font-semibold w-[90%] flex text-left'>
                            Student Name:
                            <input type="text" class="Rno p-1 outline-none bg-transparent border-b-[2px] border-black w-[73%] mx-2" value="<?php echo $row['name']; ?>"/>
                        </label>

                        <label htmlFor="" class='text-sm text-black font-semibold w-[90%] flex text-left'>
                            Class:
                            <input type="text" class="Rno p-1 outline-none bg-transparent border-b-[2px] border-black w-[73%] mx-2" value="<?php echo $row['class']; ?>"/>
                        </label>
                    </div>
                 
                    <div class="reciptTable my-2">
                        <table class="Recipttable w-[100%]">
                            <thead class='border border-black bg-slate-400'>
                                <tr class='border border-black'>
                                    <th class='border text-sm border-black'>Perticular</th>
                                    <th class='border text-sm border-black'>Ammount Rs.</th>
                                    <th class='border text-sm border-black'>Ps.</th>
                                </tr>
                            </thead>
                            <tbody class='border border-black'>
                                <tr class='border border-black'>
                                    <th class='border text-sm text-left border-black'> &nbsp; Addmission Fee</th>
                                    <td class='border text-sm text-center font-semibold border-black'>  1000</td>
                                    <td class='border text-sm text-center font-semibold border-black'>  32</td>
                                </tr>
                                <tr class='border border-black'>
                                    <th class='border text-sm text-left border-black'> &nbsp; Arts & Sports</th>
                                    <td class='border text-sm text-center font-semibold border-black'>  500</td>
                                    <td class='border text-sm text-center font-semibold border-black'>  32</td>
                                </tr>
                                <tr class='border border-black'>
                                    <th class='border text-sm text-left border-black'> &nbsp; Lab & Library</th>
                                    <td class='border text-sm text-center font-semibold border-black'>  500</td>
                                    <td class='border text-sm text-center font-semibold border-black'>  32</td>
                                </tr>
                                <tr class='border border-black'>
                                    <th class='border text-sm text-left border-black'> &nbsp; Communication</th>
                                    <td class='border text-sm text-center font-semibold border-black'>  500</td>
                                    <td class='border text-sm text-center font-semibold border-black'>  32</td>
                                </tr>
                                <tr class='border border-black'>
                                    <th class='border text-sm text-left border-black'> &nbsp; Medical Fee</th>
                                    <td class='border text-sm text-center font-semibold border-black'>  500</td>
                                    <td class='border text-sm text-center font-semibold border-black'>  32</td>
                                </tr>
                                <tr class='border border-black'>
                                    <th class='border text-sm text-left border-black'> &nbsp; Annual Programm</th>
                                    <td class='border text-sm text-center font-semibold border-black'>  1000</td>
                                    <td class='border text-sm text-center font-semibold border-black'>  32</td>
                                </tr>
                                <tr class='border border-black'>
                                    <th class='border text-sm text-left border-black'> &nbsp; School Fee</th>
                                    <td class='border text-sm text-center font-semibold border-black'>  1000</td>
                                    <td class='border text-sm text-center font-semibold border-black'>  32</td>
                                </tr>
                                <tr class='border border-black'>
                                    <th class='border text-sm text-left border-black'> &nbsp; First Installment</th>
                                    <td class='border text-sm text-center font-semibold border-black'>  4000</td>
                                    <td class='border text-sm text-center font-semibold border-black'>  32</td>
                                </tr>
                                <tr class='border border-black'>
                                    <th class='border text-sm text-left border-black'> &nbsp; Second Instalment</th>
                                    <td class='border text-sm text-center font-semibold border-black'>  4000</td>
                                    <td class='border text-sm text-center font-semibold border-black'>  32</td>
                                </tr>
                                <tr class='border border-black'>
                                    <th class='border text-sm text-left border-black'> &nbsp; Miscellaneous</th>
                                    <td class='border text-sm text-center font-semibold border-black'>  500</td>
                                    <td class='border text-sm text-center font-semibold border-black'>  32</td>
                                </tr>
                                <tr class='border border-black'>
                                    <th class='border text-sm text-left border-black'> &nbsp; Total</th>
                                    <td class='border text-sm text-center font-semibold border-black'>  8000</td>
                                    <td class='border text-sm text-center font-semibold border-black'>  32</td>
                                </tr>
                                <tr class='border border-black'>
                                    <td colspan="3" class=' text-sm text-left '>
                                        <label htmlFor="" class='text-sm font-bold  text-black w-[100%] flex text-left flex-wrap'>
                                            Rupees in Word:
                                            <input type="text" class="Rno font-medium  outline-none bg-transparent border-b-[2px] border-black w-[73%] mx-2" value="Eight thousand rupees" />
                                        </label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                     
                        <p class='font-semibold mt-1 text-xs'>Fees Onceremitted will not refund under any circumstance.</p>
                        <p class='font-semibold text-xs'>Check & Clarify the detials before leaving the counter.</p>
                     

                        <div class="Signs flex justify-between items-center w-[100%] mx-auto">
                            <div class="acountsSign w-[25%]">
                                <p class='sign w-[80%] mx-auto aspect-square '></p>
                                <p class='text-sm font-bold text-center'>Accounts / Administration </p>
                            </div>
                            <div class="cleark w-[25%]">
                                <p class='sign w-[80%] mx-auto aspect-square'></p>
                                <p class='text-sm font-bold text-center'>Cleark</p>

                            </div>

                            <div class="principle w-[25%]">
                                <p class='sign w-[80%] mx-auto aspect-square '></p>
                                <p class='text-sm font-bold text-center'>Principle</p>
                            </div>
                        </div>

                    </div>
                
                </div>

            </div>
           
      

<div class="Downlode w-[100%] text-center flex justify-center items-center flex-wrap">
    <button id="printButton" class='print'>Print</button>
</div>

<script>
    document.getElementById('printButton').addEventListener('click', function () {
        var printContent = document.getElementById('printContent').innerHTML;
        var originalContent = document.body.innerHTML;

        document.body.innerHTML = printContent;

        window.print();

        document.body.innerHTML = originalContent;
    });
</script>

</body>
</html>
