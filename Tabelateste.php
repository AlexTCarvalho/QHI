<?php
var table = $('monthly-table');

$('table tr').each(function(){
var number = $('.name').html();
alert(name);

});
?>

<! DOCTYPE HTML>
<html>
<head>
     <meta charset="UTF-8"/>
     <title>H&A Weekly QHI (RAC)</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

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
   <td class="number">2,62</td>
   <td class="number">2,31</td>
   <td class="number">2,18</td>
   <td class="number">2,29</td>
   <td class="number">2,48</td>
   <td class="number">2,42</td>
   <td class="number">2,23</td>
   <td class="number">2,12</td>
   <td class="number">2,07</td>
   <td class="number">1,97</td>
   <td class="number">1,80</td>
   <td class="number">1,72</td>
  </tr>
  <tr style="text-align: center;">
   <td>'18</td>
   <td class="number">1,67</td>
   <td class="number">1,56</td>
   <td class="number">1,50</td>
   <td class="number">1,52</td>
   <td class="number">1,48</td>
   <td class="number">1,47</td>
   <td class="number">1,48</td>
   <td class="number">1,44</td>
   <td class="number">1,44</td>
   <td class="number">1,39</td>
   <td></td>
   <td></td>
  </tr>
  <tr style="text-align: center;">
   <td>Improvement</td> <!-- ((17' - 18')/17')*100 -->
   <td>Taxa <img width="20px" src="upgreen.svg" alt="Logo" /></td>
  </tr>
  <tr style="text-align: center;">
   <td rowspan="3" style="text-align: center; vertical-align: middle">FCR (Edmilson)</td>
   <td>'17</td>
   <td class="number">1,01</td>
   <td class="number">1,22</td>
   <td class="number">1,45</td>
   <td class="number">1,56</td>
   <td class="number">1,60</td>
   <td class="number">1,57</td>
   <td class="number">1,49</td>
   <td class="number">1,40</td>
   <td class="number">1,28</td>
   <td class="number">1,14</td>
   <td class="number">1,06</td>
   <td class="number">1,04</td>
  </tr>
  <tr style="text-align: center;">
   <td>'18</td>
   <td class="number">0,76</td>
   <td class="number">0,87</td>
   <td class="number">0,95</td>
   <td class="number">1,21</td>
   <td class="number">1,33</td>
   <td class="number">1,24</td>
   <td class="number">1,18</td>
   <td class="number">1,13</td>
   <td class="number">1,09</td>
   <td class="number">1,05</td>
   <td class="number"></td>
   <td class="number"></td>
  </tr>
  <tr style="text-align: center;">
   <td>Improvement</td> <!-- (1 - 18'/17')*100 -->
   <td>Rate <img width="20px" src="upgreen.svg" alt="Logo" /></td>
  </tr>
  <tr style="text-align: center;">
   <td rowspan="9" style="text-align: center; vertical-align: middle">Production</td>
   <td rowspan="3" style="text-align: center; vertical-align: middle">PRR (Jessylane)</td>
   <td>'17</td>
   <td class="number">0</td>
   <td class="number">10</td>
   <td>91</td>
   <td class="number">140</td>
   <td class="number">259</td>
   <td class="number">295</td>
   <td class="number">299</td>
   <td class="number">379</td>
   <td class="number">395</td>
   <td class="number">453</td>
   <td class="number">494</td>
   <td class="number">531</td>
  </tr>
  <tr style="text-align: center;">
   <td>'18</td>
   <td class="number">728</td>
   <td class="number">712</td>
   <td class="number">636</td>
   <td class="number">579</td>
   <td class="number">567</td>
   <td class="number">564</td>
   <td class="number">501</td>
   <td class="number">486</td>
   <td class="number">479</td>
   <td class="number">482</td>
   <td></td>
   <td></td>
  </tr>
  <tr style="text-align: center;">
      <td>Improvement</td> <!-- (1 - 18'/17')*100 -->
      <td>Rate <img width="20px" src="upgreen.svg" alt="Logo" /></td>
  </tr>
  <tr style="text-align: center;">
  <td rowspan="3" style="text-align: center; vertical-align: middle">TLDR (Mateus + Vanessa)</td>
   <td>'17</td>
   <td class="number">3648</td>
   <td class="number">3597</td>
   <td class="number">3322</td>
   <td class="number">140</td>
   <td class="number">259</td>
   <td class="number">295</td>
   <td class="number">299</td>
   <td class="number">379</td>
   <td class="number">395</td>
   <td class="number">453</td>
   <td class="number">494</td>
   <td class="number">531</td>
  </tr>
  <tr style="text-align: center;">
   <td>'18</td>
   <td class="number">2210</td>
   <td class="number">2051</td>
   <td class="number">2322</td>
   <td class="number">2277</td>
   <td class="number">567</td>
   <td class="number">564</td>
   <td class="number">501</td>
   <td class="number">486</td>
   <td class="number">479</td>
   <td class="number">482</td>
   <td></td>
   <td></td>
  </tr>
  <tr style="text-align: center;">
      <td>Improvement</td> <!-- (1 - 18'/17')*100 -->
      <td>Rate <img width="20px" src="upgreen.svg" alt="Logo" /></td>
  </tr>
  <tr style="text-align: center;">
  <td rowspan="3" style="text-align: center; vertical-align: middle">IFRR (Edmilson)</td>
   <td>'17</td>
   <td class="number">0,56</td>
   <td class="number">0,0</td>
   <td class="number">0,31</td>
   <td class="number">0,24</td>
   <td class="number">2,87</td>
   <td class="number">0,34</td>
   <td class="number">2,72</td>
   <td class="number">0,22</td>
   <td class="number">0,14</td>
   <td class="number">0,85</td>
   <td class="number">0,00</td>
   <td class="number">0,22</td>
  </tr>
  <tr style="text-align: center;">
   <td>'18</td>
   <td class="number">0,56</td>
   <td class="number">0,0</td>
   <td class="number">0,31</td>
   <td class="number">0,24</td>
   <td class="number">2,87</td>
   <td class="number">0,34</td>
   <td class="number">2,72</td>
   <td class="number">0,22</td>
   <td class="number">0,14</td>
   <td class="number">0,85</td>
   <td></td>
   <td></td>
  </tr>
  <tr style="text-align: center;">
      <td>Improvement</td> <!-- (1 - 18'/17')*100 -->
      <td>Rate <img width="20px" src="upgreen.svg" alt="Logo" /></td>
  </tr>
  <tr style="text-align: center;">
      <td rowspan="3" style="text-align: center; vertical-align: middle">Issue</td>
      <td style="text-align: center";>Primeira linha</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td></td>
      <td></td>
  </tr>
  <tr style="text-align: center;">
      <td style="text-align: center";>CEO Information Reporting </td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td></td>
      <td></td>
  </tr>
  <tr style="text-align: center;">
      <td style="text-align: center";>Terceira linha</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td></td>
      <td></td>
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
  <tr style="text-align: center;">
   <td rowspan="6" style="vertical-align: middle">Market</td>
   <td rowspan="3" style="vertical-align: middle">FFR (Edmilson)</td>
   <td>SVC Number</td>
   <td class="number">2,727</td>
   <td> </td>
   <td class="number">2,191 </td>
   <td class="number">2,229 </td>
   <td class="number">2,280 </td>
   <td class="number">2,352 </td>
   <td> </td>
   <td class="number">2,352 </td>
   <td><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td style="color: green">x% <img width="20px" src="downgreen.svg" alt="Logo" /> </td>
  </tr>
  <tr style="text-align: center;">
   <td>Weighted cumulative spectral</td>
   <td class="number">138,474  </td>
   <td>     </td>
   <td class="number">160,874  </td>
   <td class="number">160,888  </td>
   <td class="number">161,305  </td>
   <td class="number">161,409  </td>
   <td></td>
   <td class="number">161,409</td>
   <td><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td style="color: green"> 17% <img width="20px" src="upgreen.svg" alt="Logo" /> </td>
  </tr>
  <tr style="text-align: center;">
   <td>Failure Field Rate </td> <!-- ((up/down)*100) -->
   <td class="number">1.97</td>
   <td class="number">1.90</td>
   <td class="number">1.36</td>
   <td class="number">1.39</td>
   <td class="number">1.41</td>
   <td class="number">1.46</td>
   <td></td>
   <td class="number">1.46</td>
   <td><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td style="color: green"> x% <img width="20px" src="upgreen.svg" alt="Logo" /> </td>
   <td >35 </td>
   <td >100% </td>
   <td class="number">35</td>
  </tr>
  <tr style="text-align: center;">
   <td rowspan="3" style="vertical-align: middle">FCR (Edmilson)</td>
   <td>Failure cost</td>
   <td class="number">63,5</td>
   <td class="number">60,4</td>
   <td class="number">13,0</td>
   <td class="number">14,6</td>
   <td class="number">14,0</td>
   <td class="number">10,3</td>
   <td></td>
   <td class="number">51,9</td>
   <td><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td style="color: green"> x% <img width="20px" src="downgreen.svg" alt="Logo" /> </td>
  </tr>
  <tr style="text-align: center;">
   <td>Sales</td>
   <td class="number">14.528,7</td>
   <td class="number">13.802,3</td>
   <td class="number">235,2</td>
   <td>###</td>
   <td class="number">408,0</td>
   <td>900,1</td>
   <td></td>
   <td class="number">2.980,3</td>
   <td><img width="20px" src="circlered.svg" alt="Logo" /> </td>
   <td style="color: red"> 298% <img width="20px" src="upred.svg" alt="Logo" /> </td>
  </tr>
  <tr style="text-align: center;">
   <td>Failure Cost Rate </td> <!-- ((up/down)*100) -->
   <td class="number">0,44</td>
   <td class="number">0,44</td>
   <td class="number">5,53</td>
   <td class="number">1,02</td>
   <td class="number">3,43</td>
   <td class="number">1,14</td>
   <td></td>
   <td class="number">1,74</td>
   <td><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td style="color: green"> x% <img width="20px" src="downgreen.svg" alt="Logo" /> </td>
   <td style="vertical-align: bottom;">4 </td>
   <td style="vertical-align: bottom;">20% </td>
   <td class="number">20</td>
  </tr>
  <tr style="text-align: center;">
   <td rowspan="9" style="vertical-align: middle">Production</td>
   <td rowspan="3" style="vertical-align: middle">PRR (Jessylane)</td>
   <td>Poor parts quantity</td>
   <td class="number">54</td>
   <td></td>
   <td class="number">0</td>
   <td class="number">6</td>
   <td class="number">15</td>
   <td class="number">10</td>
   <td></td>
   <td class="number">31</td>
   <td><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td style="color: green"> x% <img width="20px" src="downgreen.svg" alt="Logo" /> </td>
  </tr>
  <tr style="text-align: center;">
   <td>Production quantity</td>
   <td class="number">70.511</td>
   <td></td>
   <td class="number">4.191</td>
   <td class="number">5.002</td>
   <td class="number">21.083</td>
   <td>9.898</td>
   <td></td>
   <td class="number">40.174</td>
   <td><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td style="color: green"> x% <img width="20px" src="downgreen.svg" alt="Logo" /> </td>
  </tr>
  <tr style="text-align: center;">
      <td>Parts Return Rate</td>
   <td class="number">766</td>
   <td class="number">454</td>
   <td class="number">0</td>
   <td class="number">1.200</td>
   <td class="number">711</td>
   <td class="number">1.010</td>
   <td></td>
   <td class="number">772</td>
   <td><img width="20px" src="circlered.svg" alt="Logo" /> </td>
   <td style="color: red"> x% <img width="20px" src="upred.svg" alt="Logo" /> </td>
   <td class="number">3</td>
   <td class="number">20%</td>
   <td class="number">15</td>
  </tr>
  <tr style="text-align: center;">
  <td rowspan="3" style="text-align: center; vertical-align: middle">TLDR (Mateus + Vanessa)</td>
   <td>Poor parts quantity</td>
   <td class="number">131</td>
   <td></td>
   <td class="number">11</td>
   <td class="number">7</td>
   <td class="number">25</td>
   <td class="number">19</td>
   <td></td>
   <td class="number">62</td>
   <td><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td style="color: green"> x% <img width="20px" src="downgreen.svg" alt="Logo" /> </td>
  </tr>
  <tr style="text-align: center;">
   <td>Total production quantity</td>
   <td class="number">35.034</td>
   <td></td>
   <td class="number">2.115</td>
   <td class="number">4.738</td>
   <td>9854</td>
   <td class="number">7922</td>
   <td></td>
   <td class="number">24.629</td>
   <td><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td style="color: green"> x% <img width="20px" src="downgreen.svg" alt="Logo" /> </td>
  </tr>
  <tr style="text-align: center;">
      <td>Total Line Defect Rate</td> <!-- (1 - 18'/17')*100 -->
   <td class="number">35.034</td>
   <td></td>
   <td class="number">2.115</td>
   <td class="number">4.738</td>
   <td>9854</td>
   <td class="number">7922</td>
   <td></td>
   <td class="number">24.629</td>
   <td><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td style="color: green"> x% <img width="20px" src="downgreen.svg" alt="Logo" /> </td>
   <td class="number">12</td>
   <td class="number">80%</td>
   <td class="number">15</td>
  </tr>
  <tr style="text-align: center">
  <td rowspan="3" style="text-align: center; vertical-align: middle">IFRR (Edmilson)</td>
  <td>Rework quantity</td>
   <td class="number">35.054</td>
   <td></td>
   <td class="number">2.000</td>
   <td class="number">2.837</td>
   <td class="number">15</td>
   <td class="number">10</td>
   <td></td>
   <td class="number">31</td>
   <td><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td style="color: green"> x% <img width="20px" src="downgreen.svg" alt="Logo" /> </td>
  </tr>
  <tr style="text-align: center;">
    <td>Total production quantity</td>
   <td class="number">0</td>
   <td></td>
   <td class="number">0</td>
   <td class="number">0</td>
   <td class="number">15</td>
   <td class="number">10</td>
   <td></td>
   <td class="number">31</td>
   <td><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td style="color: green"> x% <img width="20px" src="downgreen.svg" alt="Logo" /> </td>
  </tr>
  <tr style="text-align: center;">
      <td>Intern Failure Rework Rate</td>
   <td class="number">0</td>
   <td></td>
   <td class="number">0</td>
   <td class="number">0</td>
   <td class="number">15</td>
   <td class="number">10</td>
   <td></td>
   <td class="number">31</td>
   <td><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td style="color: green"> x% <img width="20px" src="downgreen.svg" alt="Logo" /> </td>
   <td class="number">15</td>
   <td class="number">100%</td>
   <td class="number">15</td>
  </tr>
  <tr style="text-align: center;">
      <td rowspan="3" style="text-align: center; vertical-align: middle">Issue</td>
      <td style="text-align: center";>Primeira linha</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td></td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
   <td>- </td>
   <td>- </td>
   <td>-</td>
  </tr>
  <tr style="text-align: center;">
      <td style="text-align: center";>CEO Information Reporting</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td class="number">0</td>
      <td></td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
   <td>- </td>
   <td>- </td>
   <td>-</td>
  </tr>
  <tr style="text-align: center;">
      <td style="text-align: center";>Terceira linha</td>
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
      <td>-</td>
   <td>- </td>
   <td>- </td>
   <td>-</td>
  </tr>
  <tr style="text-align: center;">
    <b>
      <td colspan="3">Total</td>
    <td colspan="6"></td>
    <td class="number">2229</td>
    <td colspan="3"></td>
    <td class="number">81</td>
    <td class="number">81%</td>
    <td class="number">100</td>
    </b>
    
  </tr>
  
 </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>