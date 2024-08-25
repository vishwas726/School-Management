<!DOCTYPE html>
<html>
<head>
   
  </style>
 
</head> <script>
    $('.nav-link').on('click', function() {
	$('.active-link').removeClass('active-link');
	$(this).addClass('active-link');
});
    </script>
<body>

    <div class="all">
            <div className="reciptWrapper max-w-[1200px] mx-auto border shadow-md py-2 my-10">

           
                <div className='reciptGenerate max-w-[500px] flex flex-wrap gap-2 py-5 p-2 '>
                <form method="GET" action="" autocomplete="off">  <label htmlFor="recipt" className='font-semibold'>
                        Student _Id
                        <br />
                        <input name="search" type="text" className='border border-black p-1.5 w-[90%] mx-auto sm:w-[14rem] my-3 rounded-sm' />
                        <button type="submit" value="Search" className='bg-green-400 p-2 mx-1 sm:mx-2 rounded-sm px-2 my-2 text-white hover:shadow-md hover:opacity-90'>Generate</button>
                        <button className='bg-green-400 p-2 mx-2 rounded-sm px-2 text-white hover:shadow-md hover:opacity-90'>View</button>
                        </form>
                    </label>
                </div>
     
      
      <h1 className='text-center my-6 font-bold text-2xl ' ><span className='text-blue-500'>Reci</span><span className="border-b-2 border-blue-500 ">pt</span></h1>

             
                <div className="reciptPage  p-2 w-[90%] sm: mx-auto overflow-x-auto  ">

                    <div className="recipt border border-black p-1 w-[600px] bg-slate-100 mx-auto overflow-hidden">

                      
                        <div className="hearWrapper font-bold border-b-2 mt-2 text-center border-black">
                            <p className='text-xs'>M.J.P.S.W.Society,Jalna's</p>
                            <h1 className='text-3xl '>Ashlesha School</h1>
                            <p className='text-sm'>Bhagya Nagar, Old Jalna. Ph.:02482-225851</p>
                            <p className='text-sm'>Email: ashleshaschooljalna</p>
                            <p className='text-sm'>Website: www.ashleshaschool.in</p>
                        </div>
                      

                     
                        <div className="hearWrapper font-bold my-2 flex justify-between items-center flex-wrap text-center ">
                            <label htmlFor="" className='text-sm text-black font-semibold'>
                                Recipt No:
                                <input type="number" className="Rno p-1.5 outline-none border w-[9rem] mx-2 bg-transparent" />
                            </label>

                            <label htmlFor="" className='text-sm text-black font-semibold'>
                                Date:
                                <input type="date" className="Rno p-1.5 outline-none w-[9rem] mx-2 bg-transparent" />
                            </label>
                            <br />

                            <label htmlFor="" className='text-sm text-black font-semibold w-[90%] flex text-left'>
                                Student Name:
                                <input type="text" className="Rno p-1 outline-none bg-transparent border-b-[2px] border-black w-[73%] mx-2" value="<?php echo $row['name']; ?>"/>
                            </label>

                            <label htmlFor="" className='text-sm text-black font-semibold w-[90%] flex text-left'>
                                Class:
                                <input type="text" className="Rno p-1 outline-none bg-transparent border-b-[2px] border-black w-[73%] mx-2" value="<?php echo $row['class']; ?>"/>
                            </label>
                        </div>
                     
                        <div className="reciptTable my-2">
                            <table class="Recipttable w-[100%]">
                                <thead className='border border-black bg-slate-400'>
                                    <tr className='border border-black'>
                                        <th className='border text-sm border-black'>Perticular</th>
                                        <th className='border text-sm border-black'>Ammount Rs.</th>
                                        <th className='border text-sm border-black'>Ps.</th>
                                    </tr>
                                </thead>
                                <tbody className='border border-black'>
                                    <tr className='border border-black'>
                                        <th className='border text-sm text-left border-black'> &nbsp; Addmission Fee</th>
                                        <td className='border text-sm text-center font-semibold border-black'>  12000</td>
                                        <td className='border text-sm text-center font-semibold border-black'>  32</td>
                                    </tr>
                                    <tr className='border border-black'>
                                        <th className='border text-sm text-left border-black'> &nbsp; Arts & Sports</th>
                                        <td className='border text-sm text-center font-semibold border-black'>  12000</td>
                                        <td className='border text-sm text-center font-semibold border-black'>  32</td>
                                    </tr>
                                    <tr className='border border-black'>
                                        <th className='border text-sm text-left border-black'> &nbsp; Lab & Library</th>
                                        <td className='border text-sm text-center font-semibold border-black'>  12000</td>
                                        <td className='border text-sm text-center font-semibold border-black'>  32</td>
                                    </tr>
                                    <tr className='border border-black'>
                                        <th className='border text-sm text-left border-black'> &nbsp; Communication</th>
                                        <td className='border text-sm text-center font-semibold border-black'>  12000</td>
                                        <td className='border text-sm text-center font-semibold border-black'>  32</td>
                                    </tr>
                                    <tr className='border border-black'>
                                        <th className='border text-sm text-left border-black'> &nbsp; Addmission Fee</th>
                                        <td className='border text-sm text-center font-semibold border-black'>  12000</td>
                                        <td className='border text-sm text-center font-semibold border-black'>  32</td>
                                    </tr>
                                    <tr className='border border-black'>
                                        <th className='border text-sm text-left border-black'> &nbsp; Annual Programm</th>
                                        <td className='border text-sm text-center font-semibold border-black'>  12000</td>
                                        <td className='border text-sm text-center font-semibold border-black'>  32</td>
                                    </tr>
                                    <tr className='border border-black'>
                                        <th className='border text-sm text-left border-black'> &nbsp; School Fee</th>
                                        <td className='border text-sm text-center font-semibold border-black'>  12000</td>
                                        <td className='border text-sm text-center font-semibold border-black'>  32</td>
                                    </tr>
                                    <tr className='border border-black'>
                                        <th className='border text-sm text-left border-black'> &nbsp; First Installment</th>
                                        <td className='border text-sm text-center font-semibold border-black'>  12000</td>
                                        <td className='border text-sm text-center font-semibold border-black'>  32</td>
                                    </tr>
                                    <tr className='border border-black'>
                                        <th className='border text-sm text-left border-black'> &nbsp; Second Instalment</th>
                                        <td className='border text-sm text-center font-semibold border-black'>  12000</td>
                                        <td className='border text-sm text-center font-semibold border-black'>  32</td>
                                    </tr>
                                    <tr className='border border-black'>
                                        <th className='border text-sm text-left border-black'> &nbsp; Miscellaneous</th>
                                        <td className='border text-sm text-center font-semibold border-black'>  12000</td>
                                        <td className='border text-sm text-center font-semibold border-black'>  32</td>
                                    </tr>
                                    <tr className='border border-black'>
                                        <th className='border text-sm text-left border-black'> &nbsp; Total</th>
                                        <td className='border text-sm text-center font-semibold border-black'>  12000</td>
                                        <td className='border text-sm text-center font-semibold border-black'>  32</td>
                                    </tr>
                                    <tr className='border border-black'>
                                        <td colspan="3" className=' text-sm text-left '>
                                            <label htmlFor="" className='text-sm font-bold  text-black w-[100%] flex text-left flex-wrap'>
                                                Rupees in Word:
                                                <input type="text" className="Rno font-medium  outline-none bg-transparent border-b-[2px] border-black w-[73%] mx-2" />
                                            </label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                         
                            <p className='font-semibold mt-1 text-xs'>Fees Onceremitted will not refund under any circumstance.</p>
                            <p className='font-semibold text-xs'>Check & Clarify the detials before leaving the counter.</p>
                         

                            <div className="Signs flex justify-between items-center w-[100%] mx-auto">
                                <div className="acountsSign w-[25%]">
                                    <p className='sign w-[80%] mx-auto aspect-square '></p>
                                    <p className='text-sm font-bold text-center'>Accounts / Adm</p>
                                </div>
                                <div className="cleark w-[25%]">
                                    <p className='sign w-[80%] mx-auto aspect-square'></p>
                                    <p className='text-sm font-bold text-center'>Cleark</p>

                                </div>

                                <div className="principle w-[25%]">
                                    <p className='sign w-[80%] mx-auto aspect-square '></p>
                                    <p className='text-sm font-bold text-center'>Principle</p>
                                </div>
                            </div>

                        </div>
                    
                    </div>

                </div>
               
                <div className="Downlode w-[100%] text-center flex justify-center items-center flex-wrap">
                    <button className='bg-green-400 p-2 font-bold  sm:mx-2 rounded-md px-6 my-2 text-white hover:shadow-md hover:opacity-90'>Downlode</button>
                    <button className='bg-blue-400 p-2 font-bold  sm:mx-2 rounded-md px-6 my-2 text-white hover:shadow-md hover:opacity-90 mx-5'>Print</button>
                </div>
          
            </div>
           <?php
 
           $conn->close(); ?>
        </div>
        </body>
        </html>