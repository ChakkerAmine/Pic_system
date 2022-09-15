<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/js/bootstrap.bundle.js">
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/js/bootstrap.esm.js">
    <script src="./bootstrap-5.0.2-dist/js/bootstrap.js"></script>
    <title>Document</title>
    <style>
        .hayhay{
            height: 20px;
            background-color: black;
        }
        .nopadding{
            padding: 0px !important;
            margin: 0px !important;
        }
        #outputTable > tbody > tr > td:nth-child(5) {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container-xxl">
        <h1 class="text-center">Picture Management System</h1>
    <hr>
   
    <!--serach form-->
    <form action="">
        <div class="input-group">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <button type="button" class="btn btn-outline-primary">search</button>
          </div>
    </form>

    <div class="d-flex" style="height: 50px;">
        <div class="vr"></div>
      </div>

    <!--inputs form-->
    <div class="row">
        <form action="" class="row form-inline">
            <div class="form-group col-2">
                <input class="form-control" type="text"
                       placeholder="Nom de Client" id="cName"/>
            </div>
            <div class="form-group col-2">
                <input class="form-control" type="text"
                       placeholder="Photo ID" id="cId"/>
            </div>
            <div class="form-group col-1">
                <input class="form-control" list="nmbr" placeholder="nmbr" id="cNmbr"/>
                <datalist id="nmbr">
                    <option value="4">
                    <option value="8">
                  </datalist>
            </div>
            
            <!--
            <div class="form-group col-2">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownYesNo" data-bs-toggle="dropdown" aria-expanded="false">
                      YES/NO
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownYesNo">
                      <li><a class="dropdown-item" href="#">YES</a></li>
                      <li><a class="dropdown-item" href="#">NO</a></li>
                    </ul>
                  </div>
            </div>
            -->
            <div class="col-1">
                <!-- <button type="button" class="btn btn-secondary col-1" id="togglePayementYes">Yes</button>
                <button type="button" class="btn btn-secondary col-1" id="togglePayementNo">No</button> -->
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="btnradio" id="togglePayementYes" autocomplete="off" checked>
                    <label class="btn btn-outline-primary" for="togglePayementYes" value="YES">YES</label>
                  
                    <input type="radio" class="btn-check" name="btnradio" id="togglePayementNo" autocomplete="off">
                    <label class="btn btn-outline-primary" for="togglePayementNo" value="NO">No</label>
                  </div>
                  
           </div>

           <!-- <div class="btn-group col-2" role="group" >
            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </button>
            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
              <li><a class="dropdown-item" href="#">normal</a></li>
              <li><a class="dropdown-item" href="#">CIN</a></li>
              <li><a class="dropdown-item" href="#">Passport</a></li>
            </ul>
          </div> -->
          <div class="col-2">
            <select class="form-select" id="cType">
                <!-- <option selected>Open this select menu</option> -->
                <option selected value="normal">normal</option>
                <option value="cin">CIN</option>
                <option value="pass">Passport</option>
              </select>
          </div>
          

            <div class="col-2">
                <button type="button" class="btn btn-success w-100 font-weight-bold" id="btnAdd">ADD</button>
            </div>
            <div class="col-2">
                <button type="button" class="btn btn-primary w-100 font-weight-bold" id="btnAddPrint">ADD & PRINT</button>
            </div>


                
    
        </form>

            <!--end of form-->

            <div class="d-flex" style="height: 50px;">
                <div class="vr"></div>
              </div>

            <!--affichage-->

            <table class="table" id="outputTable">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom de Client</th>
                    <th scope="col">Date & Time</th>
                    <th scope="col">nmbr</th>
                    <th scope="col">Payement</th>
                    <th scope="col">Type</th>
                    <th scope="col">Status</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">4120</th>
                    <td>Youssef Dehbi</td>
                    <td>15/09/2022 15:33</td>
                    <td>4</td>
                    <td class="strPay">YES</td>
                    <td>normal</td>
                    <td>printed</td>
                  </tr>
                  <tr>
                    <th scope="row">4121</th>
                    <td>Amine Dehbi</td>
                    <td>09/09/2022 17:15</td>
                    <td>8</td>
                    <td class="strPay">NO</td>
                    <td>CIN</td>
                    <td>still</td>
                  </tr>
                  <tr>
                    <th scope="row">4124</th>
                    <td>Amine Chakker</td>
                    <td>04/07/2021 10:05</td>
                    <td>4</td>
                    <td class="strPay">NO</td>    
                    <td>PASSPORT</td>
                    <td>printed</td>
                  </tr>
                  <tr>
                    <th scope="row">4126</th>
                    <td>Abdlkrim Abidi</td>
                    <td>09/09/2022 17:15</td>
                    <td>4</td>
                    <td class="strPay">YES</td>    
                    <td>normal</td>
                    <td>printed</td>
                  </tr>
                  <tr>
                    <th scope="row">4125</th>
                    <td>Mohammed Zemmoury</td>
                    <td>13/09/2022 17:15</td>
                    <td>8</td>
                    <td class="strPay">NO</td>    
                    <td>CIN</td>
                    <td>printed</td>
                  </tr>
                </tbody>
              </table>

    </div>
    

    </div>

    <div class="d-flex" style="height: 50px;">
    </div>

    <div class="d-flex justify-content-center">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </nav>
    </div>
    

    <script>
    //    function paymentChoice(){
    //     let yesChoiceBtn = document.getElementById("togglePayementYes");
    //     let noChoiceBtn = document.getElementById("togglePayementNo");

    //     yesChoiceBtn.addEventListener("click", function(){
    //         // if(yesChoiceBtn.classList.contains('btn-success')){
    //         //     yesChoiceBtn.classList.remove('btn-success');
    //         // } else {
    //         //     yesChoiceBtn.classList.add("btn-success");
    //         // }

    //                     /* error code */ /*
    //         if(yesChoiceBtn.classList.contains('btn-success') || noChoiceBtn.classList.contains('btn-danger')){
    //             togglePayementCheck(yesChoiceBtn, noChoiceBtn);
    //         } else {
    //             yesChoiceBtn.classList.add('btn-success');
    //             console.log('i am here in click event YES');
    //         }
    //         */
    //        if(yesChoiceBtn.classList.contains('btn-success') || noChoiceBtn.classList.contains('btn-danger')){
    //         togglePayementCheck(yesChoiceBtn, noChoiceBtn);
    //        } else {
    //         noChoiceBtn.classList.remove('btn-danger');
    //         yesChoiceBtn.classList.add('btn-success');

    //        }
    //     })
    //     noChoiceBtn.addEventListener("click", function(){
    //         // if(noChoiceBtn.classList.contains('btn-danger')){
    //         //     noChoiceBtn.classList.remove('btn-danger');
    //         // } else {
    //         //     noChoiceBtn.classList.add("btn-danger");
    //         // }

    //         /* error code */ /*
    //         if(yesChoiceBtn.classList.contains('btn-success') || noChoiceBtn.classList.contains('btn-danger')){
    //             togglePayementCheck(yesChoiceBtn, noChoiceBtn);
    //         } else if() {
    //             noChoiceBtn.classList.add('btn-success');
    //             console.log('i am here in click event NO');
                
    //         }
    //         */
    //         if(yesChoiceBtn.classList.contains('btn-success') || noChoiceBtn.classList.contains('btn-danger')){
    //         togglePayementCheck(yesChoiceBtn, noChoiceBtn);
    //        } else {
    //         yesChoiceBtn.classList.remove('btn-success');
    //         noChoiceBtn.classList.add('btn-danger');
    //        }

    //     })
    //    }
    //    function togglePayementCheck(yesChoiceBtn, noChoiceBtn){
    //     console.log("toggle activated");
    //         if(noChoiceBtn.classList.contains('btn-danger')){
    //             // if No Checked
    //             noChoiceBtn.classList.remove('btn-danger');
    //             yesChoiceBtn.classList.add('btn-success');
    //         } else if(yesChoiceBtn.classList.contains('btn-success')){
    //             // if Yes Checked
    //             yesChoiceBtn.classList.remove('btn-success');
    //             noChoiceBtn.classList.add('btn-danger   ');
    //         } else {
    //             // if no one checked

    //         }
    //    }

       function coloringPayementText(){
        let strs = document.querySelectorAll('.strPay');
        for(let i = 0; i<strs.length; i++){
            if(strs[i].textContent.toLocaleLowerCase() == 'yes'){
                strs[i].style.color = 'green';
            } else {
                strs[i].style.color = 'red';
            }
        }
       }

       function addNewCommand(){
        //get values
        let name = document.getElementById('cName').value;
        let id = document.getElementById('cId').value;
        let nmbr = document.getElementById('cNmbr').value;
        btnsPay = document.getElementsByName('btnradio');
        console.log(btnsPay);

        for(let i = 0; i< btnsPay.length; i++){
            if(btnsPay[i].checked){
                payStatus = btnsPay[i].value;
            }
        }
        alert(`name : ${name} \n id : ${id} \n nmbr : ${nmbr} \n payement : ${payStatus}`);
        
       }

       //calling functions
       coloringPayementText();

       //Events
       document.getElementById('btnAdd').addEventListener('click', function(){
        addNewCommand();
       })

    </script>
    <script src="./bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>
</body>
</html>