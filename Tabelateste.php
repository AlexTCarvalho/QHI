<?php



?>
<! DOCTYPE HTML>
<html>
<head>
     <meta charset="UTF-8"/>
     <title>H&A Weekly QHI (RAC)</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script type = "text/javascript">
        $(document).ready(function(){
          //alert('teste');
          var j = 0;
          var ly = [];
          var py = [];
          var rs = [];
          var mtable = $('#monthly-table');
            mtable.find('tbody tr').each(function(){
              if (j % 3 == 0){ ly = [];}
              if (j % 3 == 1){ py = [];}
              if (j % 3 == 2){ rs = [];}
              var lastyear = $(this).find('.ly').each(function(){
                ly.push($(this).text());
              });
              var presentyear = $(this).find('.py').each(function(){
                py.push($(this).text());
              });
              //alert(ly);

              var result = $(this).find('.impr');
              var tam = ly.length;
              if (result.length > 0){
                for (var i = 0; i < tam; i++) { 
                    
                    var rslt = ((ly[i]-py[i])/ly[i])*100;
                    if (ly[i] == 0){
                      if (py[i] == 0){
                        rslt = 100;
                      }else{
                        rslt = -100;
                      }
                    }
                    if (rslt > 0){
                      result[i].innerHTML = rslt.toFixed(0) + "% <img width=\"20px\" src=\"downgreen.svg\" alt=\"Logo\" />"
                    }else if (rslt < 0){
                      result[i].innerHTML = rslt.toFixed(0)*-1 + "% <img width=\"20px\" src=\"upred.svg\" alt=\"Logo\" />"
                    }else{
                      result[i].innerHTML = rslt.toFixed(0) + "% <img width=\"10px\" src=\"squareblack.svg\" alt=\"Logo\" />"
                    }
                    
                    
                  }
              }
              //alert(rs);
              j++;
              /*alert(lastyear);
              var presentyear = $(this).find('.py').text();
              alert(lastyear);
        // ((17' - 18')/17')*100
              var result = ((lastyear-presentyear)/lastyear)*100;
              if (result > 0){
                $(this).find('.impr').text(result + "% <img width="20px" src="downgreen.svg" alt="Logo" />");
              }
              }elseif (result == 0){
                $(this).find('.impr').text(result + "% <img width="20px" src="squareblack.svg" alt="Logo" />");
              }else{
                $(this).find('.impr').text(result + "% <img width="20px" src="upred.svg" alt="Logo" />");
              }*/
            });
        });
       
  
     </script>
 </head>
<body>

 <h1>H&A Weekly QHI Tabela 1</h1>
 <table id = "monthly-table" class="table table-striped table-bordered table-condensed table-hover">
 <thead>
  <tr style="text-align: center;">
   <th colspan="3" style="text-align: center; vertical-align: middle;">KPI</th>
   <th>Jan</th>
   <th>Feb</th>
   <th>Mar</th>
   <th>Apr</th>
   <th>May</th>
   <th>Jun</th>
   <th>Jul</th>
   <th>Aug</th>
   <th>Sep</th>
   <th>Oct</th>
   <th>Nov</th>
   <th>Dec</th>
  </tr>
 </thead>
 <tbody>
  <tr style="text-align: center;">
   <td rowspan="6" style="text-align: center; vertical-align: middle">Market</td>
   <td rowspan="3" style="text-align: center; vertical-align: middle">FFR (Edmilson)</td>
   <td>'17</td>
   <td class="ly">2.62</td> <!-- ly = last year-->
   <td class="ly">2.31</td>
   <td class="ly">2.18</td>
   <td class="ly">2.29</td>
   <td class="ly">2.48</td>
   <td class="ly">2.42</td>
   <td class="ly">2.23</td>
   <td class="ly">2.12</td>
   <td class="ly">2.07</td>
   <td class="ly">1.97</td>
   <td class="ly">1.80</td>
   <td class="ly">1.72</td>
  </tr>
  <tr style="text-align: center;">
   <td>'18</td>
   <td class="py">1.67</td> <!-- py = present year-->
   <td class="py">1.56</td>
   <td class="py">1.50</td>
   <td class="py">1.52</td>
   <td class="py">1.48</td>
   <td class="py">1.47</td>
   <td class="py">1.48</td>
   <td class="py">1.44</td>
   <td class="py">1.44</td>
   <td class="py">1.39</td>
   <td class="py">1.0</td>
   <td class="py">2.4</td>
  </tr>
  <tr style="text-align: center;">
   <td>Improvement</td> <!-- ((17' - 18')/17')*100 -->
   <td class="impr">Taxa </td>
   <td class="impr"></td>
   <td class="impr"></td>
   <td class="impr"></td>
   <td class="impr"></td>
   <td class="impr"></td>
   <td class="impr"></td>
   <td class="impr"></td>
   <td class="impr"></td>
   <td class="impr"></td>
   <td class="impr"></td>
   <td class="impr"></td>
  </tr>
  <tr style="text-align: center;">
   <td rowspan="3" style="text-align: center; vertical-align: middle">FCR (Edmilson)</td>
   <td>'17</td>
   <td class="ly">1.01</td>
   <td class="ly">1.22</td>
   <td class="ly">1.45</td>
   <td class="ly">1.56</td>
   <td class="ly">1.60</td>
   <td class="ly">1.57</td>
   <td class="ly">1.49</td>
   <td class="ly">1.40</td>
   <td class="ly">1.28</td>
   <td class="ly">1.14</td>
   <td class="ly">1.06</td>
   <td class="ly">1.04</td>
  </tr>
  <tr style="text-align: center;">
   <td>'18</td>
   <td class="py">0.76</td>
   <td class="py">0.87</td>
   <td class="py">0.95</td>
   <td class="py">1.21</td>
   <td class="py">1.33</td>
   <td class="py">1.24</td>
   <td class="py">1.18</td>
   <td class="py">1.13</td>
   <td class="py">1.09</td>
   <td class="py">1.05</td>
   <td class="py">12</td>
   <td class="py">12</td>
  </tr>
  <tr style="text-align: center;">
   <td>Improvement</td> <!-- (1 - 18'/17')*100 -->
   <td class="impr">Taxa </td>
   <td class="impr"></td>
   <td class="impr"></td>
   <td class="impr"></td>
   <td class="impr"></td>
   <td class="impr"></td>
   <td class="impr"></td>
   <td class="impr"></td>
   <td class="impr"></td>
   <td class="impr"></td>
   <td class="impr"></td>
   <td class="impr"></td>
  </tr>
  <tr style="text-align: center;">
   <td rowspan="9" style="text-align: center; vertical-align: middle">Production</td>
   <td rowspan="3" style="text-align: center; vertical-align: middle">PRR (Jessylane)</td>
   <td>'17</td>
   <td class="ly">0</td>
   <td class="ly">10</td>
   <td class="ly">91</td>
   <td class="ly">140</td>
   <td class="ly">259</td>
   <td class="ly">295</td>
   <td class="ly">299</td>
   <td class="ly">379</td>
   <td class="ly">395</td>
   <td class="ly">453</td>
   <td class="ly">494</td>
   <td class="ly">531</td>
  </tr>
  <tr style="text-align: center;">
   <td>'18</td>
   <td class="py">728</td>
   <td class="py">712</td>
   <td class="py">636</td>
   <td class="py">579</td>
   <td class="py">567</td>
   <td class="py">564</td>
   <td class="py">501</td>
   <td class="py">486</td>
   <td class="py">479</td>
   <td class="py">482</td>
   <td class="py">2</td>
   <td class="py">2</td>
  </tr>
  <tr style="text-align: center;">
      <td>Improvement</td> <!-- (1 - 18'/17')*100 -->
   <td class="impr">Taxa </td>
   <td class="impr"></td>
   <td class="impr"></td>
   <td class="impr"></td>
   <td class="impr"></td>
   <td class="impr"></td>
   <td class="impr"></td>
   <td class="impr"></td>
   <td class="impr"></td>
   <td class="impr"></td>
   <td class="impr"></td>
   <td class="impr"></td>
  </tr>
  <tr style="text-align: center;">
  <td rowspan="3" style="text-align: center; vertical-align: middle">TLDR (Mateus + Vanessa)</td>
   <td>'17</td>
   <td class="ly">3648</td>
   <td class="ly">3597</td>
   <td class="ly">3322</td>
   <td class="ly">140</td>
   <td class="ly">259</td>
   <td class="ly">295</td>
   <td class="ly">299</td>
   <td class="ly">379</td>
   <td class="ly">395</td>
   <td class="ly">453</td>
   <td class="ly">494</td>
   <td class="ly">531</td>
  </tr>
  <tr style="text-align: center;">
   <td>'18</td>
   <td class="py">2210</td>
   <td class="py">2051</td>
   <td class="py">2322</td>
   <td class="py">2277</td>
   <td class="py">567</td>
   <td class="py">564</td>
   <td class="py">501</td>
   <td class="py">486</td>
   <td class="py">479</td>
   <td class="py">482</td>
   <td class="py">2</td>
   <td class="py">2</td>
  </tr>
  <tr style="text-align: center;">
      <td>Improvement</td> <!-- (1 - 18'/17')*100 -->
      <td class="impr">Taxa </td>
      <td class="impr"></td>
      <td class="impr"></td>
      <td class="impr"></td>
      <td class="impr"></td>
      <td class="impr"></td>
      <td class="impr"></td>
      <td class="impr"></td>
      <td class="impr"></td>
      <td class="impr"></td>
      <td class="impr"></td>
      <td class="impr"></td>
  </tr>
  <tr style="text-align: center;">
  <td rowspan="3" style="text-align: center; vertical-align: middle">IFRR (Edmilson)</td>
   <td>'17</td>
   <td class="ly">0.56</td>
   <td class="ly">0.0</td>
   <td class="ly">0.31</td>
   <td class="ly">0.24</td>
   <td class="ly">2.87</td>
   <td class="ly">0.34</td>
   <td class="ly">2.72</td>
   <td class="ly">0.22</td>
   <td class="ly">0.14</td>
   <td class="ly">0.85</td>
   <td class="ly">0.00</td>
   <td class="ly">0.22</td>
  </tr>
  <tr style="text-align: center;">
   <td>'18</td>
   <td class="py">0.56</td>
   <td class="py">0.0</td>
   <td class="py">0.31</td>
   <td class="py">0.24</td>
   <td class="py">2.87</td>
   <td class="py">0.34</td>
   <td class="py">2.72</td>
   <td class="py">0.22</td>
   <td class="py">0.14</td>
   <td class="py">0.85</td>
   <td class="py">2</td>
   <td class="py">2</td>
  </tr>
  <tr style="text-align: center;">
    <td>Improvement</td> <!-- (1 - 18'/17')*100 -->
    <td class="impr">Taxa </td>
    <td class="impr"></td>
    <td class="impr"></td>
    <td class="impr"></td>
    <td class="impr"></td>
    <td class="impr"></td>
    <td class="impr"></td>
    <td class="impr"></td>
    <td class="impr"></td>
    <td class="impr"></td>
    <td class="impr"></td>
    <td class="impr"></td>
  </tr>
  <!--
   </tbody>
</table>
<h1>H&A Weekly QHI Tabela 1 de baixo</h1>
 <table id = "table2" class="table table-striped table-bordered table-condensed table-hover">
 -->
  <!--
 <thead>
  <tr style="text-align: center;">
   <th colspan="3" style="text-align: center; vertical-align: middle;">KPI</th>
   <th>Jan</th>
   <th>Feb</th>
   <th>Mar</th>
   <th>Apr</th>
   <th>May</th>
   <th>Jun</th>
   <th>Jul</th>
   <th>Aug</th>
   <th>Sep</th>
   <th>Oct</th>
   <th>Nov</th>
   <th>Dec</th>
  </tr>
 </thead>
 -->
  <tr style="text-align: center;">
      <td rowspan="3" style="text-align: center; vertical-align: middle">Issue</td>
      <td colspan="2" style="text-align: center";>Primeira linha</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>-</td>
      <td>-</td>
  </tr>
  <tr style="text-align: center;">
      <td colspan="2">CEO Information Reporting </td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>-</td>
      <td>-</td>
  </tr>
  <tr style="text-align: center;">
      <td colspan="2">Terceira linha</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>-</td>
      <td>-</td>
  </tr>
 </tbody>
</table>


 <h1>H&A Weekly QHI Tabela 2</h1>
 <table id="weekly-table" class="table table-striped table-bordered table-condensed table-hover">
 <thead>
  <tr style="text-align: center;">
   <th style="vertical-align: middle;" colspan="3" rowspan="2">KPI</th>
   <th style="vertical-align: middle;" rowspan="2" >OCT'17 <br> Performance</th>
   <th style="vertical-align: middle;" rowspan="2" >OCT'18 <br> Objective</th>
   <th style="vertical-align: middle;" colspan="8" >OCT'18 Performance</th>
   <th style="vertical-align: middle;" rowspan="2" >Punctuation</th>
   <th style="vertical-align: middle;" rowspan="2" >Accomplishment</th>
   <th style="vertical-align: middle;" rowspan="2" >Pattern (Padrão)</th>
  </tr>
  <tr style="text-align: center; vertical-align: middle;">
   <td>W40  </td>
   <td>W41  </td>
   <td>W42  </td>
   <td>W43  </td>
   <td>W44  </td>
   <td>Accumulate </td>
   <td colspan="2">Improvement rate</td> <!--  ((17' - 18')/17')*100-->
  </tr>
 </thead>
 <tbody>
  <tr style="text-align: center;" class ="FFR">
   <td rowspan="6" style="vertical-align: middle">Market</td>
   <td rowspan="3" style="vertical-align: middle">FFR (Edmilson)</td>
   <td>SVC Number</td>
   <td class="lp">2.727</td>
   <td> </td>
   <td>2.191 </td>
   <td>2.229 </td>
   <td>2.280 </td>
   <td>2.352 </td>
   <td> </td>
   <td>2.352 </td>
   <td class="circle"><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td class="impr" style="color: green">x% <img width="20px" src="downgreen.svg" alt="Logo" /> </td>
  </tr>
  <tr style="text-align: center;" class="FFR">
   <td>Weighted cumulative spectral</td>
   <td class="lp">138,474  </td>
   <td>     </td>
   <td>160,874  </td>
   <td>160,888  </td>
   <td>161,305  </td>
   <td>161,409  </td>
   <td></td>
   <td>161,409</td>
   <td><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td style="color: green"> 17% <img width="20px" src="upgreen.svg" alt="Logo" /> </td>
  </tr>
  <tr style="text-align: center;" class="FFR">
   <td>Failure Field Rate </td> <!-- ((up/down)*100) -->
   <td class="lp">1.97</td>
   <td>1.90</td>
   <td>1.36</td>
   <td>1.39</td>
   <td>1.41</td>
   <td>1.46</td>
   <td></td>
   <td>1.46</td>
   <td><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td style="color: green"> x% <img width="20px" src="upgreen.svg" alt="Logo" /> </td>
   <td >35 </td>
   <td >100% </td>
   <td>35</td>
  </tr>
  <tr style="text-align: center;" class="FCR">
   <td rowspan="3" style="vertical-align: middle">FCR (Edmilson)</td>
   <td>Failure cost</td>
   <td class="lp">63,5</td>
   <td>60,4</td>
   <td>13,0</td>
   <td>14,6</td>
   <td>14,0</td>
   <td>10,3</td>
   <td></td>
   <td>51,9</td>
   <td><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td style="color: green"> x% <img width="20px" src="downgreen.svg" alt="Logo" /> </td>
  </tr>
  <tr style="text-align: center;" class="FCR">
   <td>Sales</td>
   <td class="lp">14.528,7</td>
   <td>13.802,3</td>
   <td>235,2</td>
   <td>###</td>
   <td>408,0</td>
   <td>900,1</td>
   <td></td>
   <td>2.980,3</td>
   <td><img width="20px" src="circlered.svg" alt="Logo" /> </td>
   <td style="color: red"> 298% <img width="20px" src="upred.svg" alt="Logo" /> </td>
  </tr>
  <tr style="text-align: center;" class="FCR">
   <td>Failure Cost Rate </td> <!-- ((up/down)*100) -->
   <td class="lp">0.44</td>
   <td>0.44</td>
   <td>5,53</td>
   <td>1.02</td>
   <td>3,43</td>
   <td>1.14</td>
   <td></td>
   <td>1.74</td>
   <td><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td style="color: green"> x% <img width="20px" src="downgreen.svg" alt="Logo" /> </td>
   <td style="vertical-align: bottom;">4 </td>
   <td style="vertical-align: bottom;">20% </td>
   <td>20</td>
  </tr>
  <tr style="text-align: center;" class ="PRR">
   <td rowspan="9" style="vertical-align: middle">Production</td>
   <td rowspan="3" style="vertical-align: middle">PRR (Jessylane)</td>
   <td>Poor parts quantity</td>
   <td class="lp">54</td>
   <td></td>
   <td>0</td>
   <td>6</td>
   <td>15</td>
   <td>10</td>
   <td></td>
   <td>31</td>
   <td><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td style="color: green"> x% <img width="20px" src="downgreen.svg" alt="Logo" /> </td>
  </tr>
  <tr style="text-align: center;" class ="PRR">
   <td>Production quantity</td>
   <td class="lp">70.511</td>
   <td></td>
   <td>4.191</td>
   <td>5.002</td>
   <td>21.083</td>
   <td>9.898</td>
   <td></td>
   <td>40.174</td>
   <td><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td style="color: green"> x% <img width="20px" src="downgreen.svg" alt="Logo" /> </td>
  </tr>
  <tr style="text-align: center;" class ="PRR">
      <td>Parts Return Rate</td>
   <td class="lp">766</td>
   <td>454</td>
   <td>0</td>
   <td>1.200</td>
   <td>711</td>
   <td>1.010</td>
   <td></td>
   <td>772</td>
   <td><img width="20px" src="circlered.svg" alt="Logo" /> </td>
   <td style="color: red"> x% <img width="20px" src="upred.svg" alt="Logo" /> </td>
   <td>3</td>
   <td>20%</td>
   <td>15</td>
  </tr>
  <tr style="text-align: center;" class="TLDR">
  <td rowspan="3" style="text-align: center; vertical-align: middle">TLDR (Mateus + Vanessa)</td>
   <td>Poor parts quantity</td>
   <td class="lp">131</td>
   <td></td>
   <td>11</td>
   <td>7</td>
   <td>25</td>
   <td>19</td>
   <td></td>
   <td>62</td>
   <td><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td style="color: green"> x% <img width="20px" src="downgreen.svg" alt="Logo" /> </td>
  </tr>
  <tr style="text-align: center;" class="TLDR">
   <td class="lp">Total production quantity</td>
   <td>35.034</td>
   <td></td>
   <td>2.115</td>
   <td>4.738</td>
   <td>9854</td>
   <td>7922</td>
   <td></td>
   <td>24.629</td>
   <td><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td style="color: green"> x% <img width="20px" src="downgreen.svg" alt="Logo" /> </td>
  </tr>
  <tr style="text-align: center;" class="TLDR">
      <td>Total Line Defect Rate</td> <!-- (1 - 18'/17')*100 -->
   <td>35.034</td>
   <td></td>
   <td>2.115</td>
   <td>4.738</td>
   <td>9854</td>
   <td>7922</td>
   <td></td>
   <td>24.629</td>
   <td><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td style="color: green"> x% <img width="20px" src="downgreen.svg" alt="Logo" /> </td>
   <td>12</td>
   <td>80%</td>
   <td>15</td>
  </tr>
  <tr style="text-align: center" class="IFRR">
  <td rowspan="3" style="text-align: center; vertical-align: middle">IFRR (Edmilson)</td>
  <td>Rework quantity</td>
   <td>35.054</td>
   <td></td>
   <td>2.000</td>
   <td>2.837</td>
   <td>15</td>
   <td>10</td>
   <td></td>
   <td>31</td>
   <td><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td style="color: green"> x% <img width="20px" src="downgreen.svg" alt="Logo" /> </td>
  </tr>
  <tr style="text-align: center;" class="IFRR">
    <td>Total production quantity</td>
   <td>0</td>
   <td></td>
   <td>0</td>
   <td>0</td>
   <td>15</td>
   <td>10</td>
   <td></td>
   <td>31</td>
   <td><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td style="color: green"> x% <img width="20px" src="downgreen.svg" alt="Logo" /> </td>
  </tr>
  <tr style="text-align: center;" class="IFRR">
      <td>Intern Failure Rework Rate</td>
   <td>0</td>
   <td></td>
   <td>0</td>
   <td>0</td>
   <td>15</td>
   <td>10</td>
   <td></td>
   <td>31</td>
   <td><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td style="color: green"> x% <img width="20px" src="downgreen.svg" alt="Logo" /> </td>
   <td>15</td>
   <td>100%</td>
   <td>15</td>
  </tr>
  <tr style="text-align: center;">
      <td rowspan="3" style="text-align: center; vertical-align: middle">Issue</td>
      <td colspan="2" style="text-align: center";>Primeira linha</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td></td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
   <td>- </td>
   <td>-</td>
  </tr>
  <tr style="text-align: center;">
      <td colspan="2" style="text-align: center";>CEO Information Reporting</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td></td>
      <td>-</td>
      <td>-</td>
   <td>- </td>
   <td>- </td>
   <td>-</td>
  </tr>
  <tr style="text-align: center;">
      <td colspan="2" style="text-align: center";>Terceira linha</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td></td>
      <td>-</td>
      <td>-</td>
   <td>- </td>
   <td>- </td>
   <td>-</td>
  </tr>
  <tr style="text-align: center;">
    <b>
      <td colspan="3">Total</td>
    <td colspan="7"></td>
    <td>2229</td>
    <td colspan="2"></td>
    <td>81</td>
    <td>81%</td>
    <td>100</td>
    </b>
    
  </tr>
  
 </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
