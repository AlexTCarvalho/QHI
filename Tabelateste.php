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
              var lastyear = $(this).find('.ly').each(function(){
                ly.push($(this).text());
              });
              var presentyear = $(this).find('.py').each(function(){
                py.push($(this).text());
              });
              //alert(ly);

              var tam = ly.length;
              var linhaIMPR = $(this).find('.impr');
              if( linhaIMPR.length != 0){
                  for (var i=0;i<linhaIMPR.length;i++){
                    var rslt = ((ly[i]-py[i])/ly[i])*100;
                    if (ly[i] == 0){
                      if (py[i] == 0){
                        rslt = 0;
                      }else{
                        rslt = -100;
                      }
                    }

                    if (rslt > 0){
                      linhaIMPR[i].innerHTML = rslt.toFixed(0) + "% <img width=\"20px\" src=\"downgreen.svg\" alt=\"Logo\" />";
                    }else if (rslt < 0){
                      linhaIMPR[i].innerHTML = rslt.toFixed(0)*(-1) + "% <img width=\"20px\" src=\"upred.svg\" alt=\"Logo\" />";
                    }else{
                      linhaIMPR[i].innerHTML = rslt.toFixed(0) + "% <img width=\"10px\" src=\"squareblack.svg\" alt=\"Logo\" />";
                    }
                  }
              }
              j++;
            });
          var wtable = $('#weekly-table');
          var j = 0;
          wtable.find('tbody tr').each(function(){
            /* PARTE TEMPORÁRIA DO CÓDIGO
            SE A ORDEM FOR FFR-FCR-PRR-TLDR-IFRR ENTÃO É DESSE JEITO
            */

            // COLUNA DOS FFR-FCR...
            if (j % 3 == 0) { 
              var fail = $(this).find('.lp');
            }
            if (j % 3 == 1) { var total = $(this).find('.lp');}
            // COLUNA DOS RESULTADOS

            var week = $(this).find('.week');
            var ap = $(this).find('.ap');
            for (var i = ap.length - 1; i >= 0; i--) {
            
              if (j < 3){
                for (var k = 0;k < week.length; k++) {
                  if (week[k].innerHTML != ''){
                    ap[i].innerHTML = week[k].innerHTML;
                  }
                }
              }else{
                var soma = 0;
                for (var k = week.length - 1; k >= 0;k--){
                  if (week[k].innerHTML != ''){
                    soma= soma + parseFloat(week[k].innerHTML);
                  }
                  
                }
                ap[i].innerHTML = soma.toFixed(1);
              }
            }

            // Feitos os resultados, vamos pras setinhas
            var lp = $(this).find('.lp');
            var ap = $(this).find('.ap');
            var result = (lp.text()-ap.text())/lp.text()*100;

            if (lp.text() == 0){
              if (ap.text() == 0){
                result = 0;
              }else{
                result = -100;
              }
            }
            var circle = $(this).find('.circle');
            var impr = $(this).find('.impr');

            if (j % 3 != 1){
              for (var i = lp.length - 1; i >= 0; i--) {
                if(result > 0){
                  circle[i].innerHTML = "<img width=\"20px\" src=\"circlegreen.svg\" alt=\"Logo\" />";
                  impr[i].innerHTML = result.toFixed(0) + "% <img width=\"20px\" src=\"downgreen.svg\" alt=\"Logo\" />"
                  impr[i].style = "color: green";
                }else if (result < 0 ){
                  circle[i].innerHTML = "<img width=\"20px\" src=\"circlered.svg\" alt=\"Logo\" />";
                  impr[i].innerHTML = result.toFixed(0)*-1 + "% <img width=\"20px\" src=\"upred.svg\" alt=\"Logo\" />";
                  impr[i].style = "color: red";
                }else{
                  circle[i].innerHTML = "<img width=\"20px\" src=\"circleblack.svg\" alt=\"Logo\" />";
                  impr[i].innerHTML = result.toFixed(0) + "% <img width=\"10px\" src=\"squareblack.svg\" alt=\"Logo\" />"
                  impr[i].style = "color: black";
                }
              }
            }else{
              for (var i = lp.length - 1; i >= 0; i--) {
                if(result > 0){
                  circle[i].innerHTML = "<img width=\"20px\" src=\"circlered.svg\" alt=\"Logo\" />";
                  impr[i].innerHTML = result.toFixed(0) + "% <img width=\"20px\" src=\"downred.svg\" alt=\"Logo\" />"
                  impr[i].style = "color: red";
                }else if (result < 0 ){
                  circle[i].innerHTML = "<img width=\"20px\" src=\"circlegreen.svg\" alt=\"Logo\" />";
                  impr[i].innerHTML = result.toFixed(0)*-1 + "% <img width=\"20px\" src=\"upgreen.svg\" alt=\"Logo\" />";
                  impr[i].style = "color: green";
                }else{
                  circle[i].innerHTML = "<img width=\"20px\" src=\"circleblack.svg\" alt=\"Logo\" />";
                  impr[i].innerHTML = result.toFixed(0) + "% <img width=\"10px\" src=\"squareblack.svg\" alt=\"Logo\" />";
                  impr[i].style = "color: black";
                }
              }
            }
            var pts = $(this).find('.pts');
            var prctg = $(this).find('.prctg');
            var patt = $(this).find('.patt');
            var result2 = (pts.text()/patt.text())*100;
            if (!isNaN(result2)){
              prctg[0].innerHTML = result2 + "%";
            }

            
            j++;
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
   <td rowspan="3" style="transformext-align: center; vertical-align: middle">FCR (Edmilson)</td>
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
   <td class="py">1</td>
   <td class="py">1</td>
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

<!-- TABELA SEMANAL -->
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
  <tr style="text-align: center;" class = "FFR">
   <td rowspan="6" style="vertical-align: middle">Market</td>
   <td rowspan="3" style="vertical-align: middle">FFR (Edmilson)</td>
   <td>SVC Number</td>
   <td class="lp">2727</td>
   <td class="ao"> </td>
   <td class="week">2191 </td>
   <td class="week">2229 </td>
   <td class="week">2280 </td>
   <td class="week">2352 </td>
   <td class="week"></td>
   <td class="ap">0 </td>
   <td class="circle"><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td class="impr" style="color: green">x% <img width="20px" src="downgreen.svg" alt="Logo" /> </td>
  </tr>
  <tr style="text-align: center;" class="FFR">
   <td>Weighted cumulative spectral</td>
   <td class="lp">138474  </td>
   <td class="ao"></td>
   <td class="week">160874  </td>
   <td class="week">160888  </td>
   <td class="week">161305  </td>
   <td class="week">161409  </td>
   <td class="week"></td>
   <td  class="ap">0</td>
   <td class="circle"><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td class="impr" style="color: green"> 17% <img width="20px" src="upgreen.svg" alt="Logo" /> </td>
  </tr>
  <tr style="text-align: center;" class="FFR">
   <td>Failure Field Rate </td> <!-- ((up/down)*100) -->
   <td class="lp">1.97</td>
   <td class="ao">1.90</td>
   <td class="week" >1.36</td>
   <td class="week" >1.39</td>
   <td class="week" >1.41</td>
   <td class="week" >1.46</td>
   <td class="week" ></td>
   <td class="ap">0</td>
   <td class="circle"><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td class="impr" style="color: green"> x% <img width="20px" src="upgreen.svg" alt="Logo" /> </td>
   <td class="pts" >35 </td>
   <td class="prctg">0% </td>
   <td class="patt">35</td>
  </tr>
  <tr style="text-align: center;" class="FCR">
   <td rowspan="3" style="vertical-align: middle">FCR (Edmilson)</td>
   <td>Failure cost</td>
   <td class="lp">63.5</td>
   <td class="ao">60.4</td>
   <td class="week">13.0</td>
   <td class="week">14.6</td>
   <td class="week">14.0</td>
   <td class="week">10.3</td>
   <td class="week"></td>
   <td class="ap">51.9</td>
   <td class="circle"><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td class="impr" style="color: green"> x% <img width="20px" src="downgreen.svg" alt="Logo" /> </td>
  </tr>
  <tr style="text-align: center;">
   <td>Sales</td>
   <td class="lp">14528.7</td>
   <td class="ao">13802.3</td>
   <td class="week">0</td><!-- 235.2 -->
   <td class="week">0</td><!--    1437.0  -->
   <td class="week">0</td><!-- 408.0-->
   <td class="week">0</td><!-- 900.1-->
   <td class="week"></td>
   <td class="ap">2980.3</td>
   <td class="circle"><img width="20px" src="circlered.svg" alt="Logo" /> </td>
   <td class="impr" style="color: red"> 298% <img width="20px" src="upred.svg" alt="Logo" /> </td>
  </tr>
  <tr style="text-align: center;">
   <td>Failure Cost Rate </td> <!-- ((up/down)*100) -->
   <td class="lp">0.44</td>
   <td class="ao">0.44</td>
   <td class="week">5.53</td>
   <td class="week">1.02</td>
   <td class="week">3.43</td>
   <td class="week">1.14</td>
   <td class="week"></td>
   <td class="ap">1.74</td>
   <td class="circle"><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td class="impr" style="color: green"> x% <img width="20px" src="downgreen.svg" alt="Logo" /> </td>
   <td class="pts" ">4 </td>
   <td class="prctg">0% </td>
   <td class="patt">20</td>
  </tr>
  <tr style="text-align: center;">
   <td rowspan="9" style="vertical-align: middle">Production</td>
   <td rowspan="3" style="vertical-align: middle">PRR (Jessylane)</td>
   <td>Poor parts quantity</td>
   <td class="lp">54</td>
   <td class="ao"></td>
   <td class="week">0</td>
   <td class="week">6</td>
   <td class="week">15</td>
   <td class="week">10</td>
   <td class="week"></td>
   <td class="ap">31</td>
   <td class="circle"><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td class="impr" style="color: green"> x% <img width="20px" src="downgreen.svg" alt="Logo" /> </td>
  </tr>
  <tr style="text-align: center;">
   <td>Production quantity</td>
   <td class="lp">70511</td>
   <td class="ao"></td>
   <td class="week">4191</td>
   <td class="week">5002</td>
   <td class="week">21083</td>
   <td class="week">9898</td>
   <td class="week"></td>
   <td class="ap">40174</td>
   <td class="circle"><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td class="impr" style="color: green"> x% <img width="20px" src="downgreen.svg" alt="Logo" /> </td>
  </tr>
  <tr style="text-align: center;">
      <td>Parts Return Rate</td>
   <td class="lp">766</td>
   <td class="ao">454</td>
   <td class="week">0</td>
   <td class="week">1200</td>
   <td class="week">711</td>
   <td class="week">1010</td>
   <td class="week"></td>
   <td class="ap">772</td>
   <td class="circle"><img width="20px" src="circlered.svg" alt="Logo" /> </td>
   <td class="impr" style="color: red"> x% <img width="20px" src="upred.svg" alt="Logo" /> </td>
   <td class="pts">3</td>
   <td class="prctg">0%</td>
   <td class="patt">15</td>
  </tr>
  <tr style="text-align: center;">
  <td rowspan="3" style="text-align: center; vertical-align: middle">TLDR (Mateus + Vanessa)</td>
   <td>Poor parts quantity</td>
   <td class="lp">131</td>
   <td class="ao"></td>
   <td class="week">11</td>
   <td class="week">7</td>
   <td class="week">25</td>
   <td class="week">19</td>
   <td class="week"></td>
   <td class="ap">62</td>
   <td class="circle"><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td class="impr" style="color: green"> x% <img width="20px" src="downgreen.svg" alt="Logo" /> </td>
  </tr>
  <tr style="text-align: center;">
   <td>Total production quantity</td>
   <td class="lp">35034</td>
   <td class="ao"></td>
   <td class="week">2115</td>
   <td class="week">4738</td>
   <td class="week">9854</td>
   <td class="week">7922</td>
   <td class="week"></td>
   <td class="ap">24629</td>
   <td class="circle"><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td class="impr" style="color: green"> x% <img width="20px" src="downgreen.svg" alt="Logo" /> </td>
  </tr>
  <tr style="text-align: center;">
      <td>Total Line Defect Rate</td> <!-- (1 - 18'/17')*100 -->
   <td class="lp">35034</td>
   <td class="ao"></td>
   <td class="week">2115</td>
   <td class="week">4738</td>
   <td class="week">9854</td>
   <td class="week">7922</td>
   <td class="week"></td>
   <td class="ap">24629</td>
   <td class="circle"><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td class="impr" style="color: green"> x% <img width="20px" src="downgreen.svg" alt="Logo" /> </td>
   <td class="pts">12</td>
   <td class="prctg">0%</td>
   <td class="patt">15</td>
  </tr>
  <tr style="text-align: center">
  <td rowspan="3" style="text-align: center; vertical-align: middle">IFRR (Edmilson)</td>
  <td>Rework quantity</td>
   <td class="lp">35054</td>
   <td class="ao"></td>
   <td class="week">2000</td>
   <td class="week">2837</td>
   <td class="week">15</td>
   <td class="week">10</td>
   <td class="week"></td>
   <td class="ap">31</td>
   <td class="circle"><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td class="impr" style="color: green"> x% <img width="20px" src="downgreen.svg" alt="Logo" /> </td>
  </tr>
  <tr style="text-align: center;">
    <td>Total production quantity</td>
   <td class="lp">0</td>
   <td class="ao"></td>
   <td class="week">0</td>
   <td class="week">0</td>
   <td class="week">15</td>
   <td class="week">10</td>
   <td class="week"></td>
   <td class="ap">31</td>
   <td class="circle"><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td class="impr" style="color: green"> x% <img width="20px" src="downgreen.svg" alt="Logo" /> </td>
  </tr>
  <tr style="text-align: center;">
      <td>Intern Failure Rework Rate</td>
   <td class="lp">0</td>
   <td class="ao"></td>
   <td class="week">0</td>
   <td class="week">0</td>
   <td class="week">15</td>
   <td class="week">10</td>
   <td class="week"></td>
   <td class="ap">31</td>
   <td class="circle"><img width="20px" src="circlegreen.svg" alt="Logo" /> </td>
   <td class="impr" style="color: green"> x% <img width="20px" src="downgreen.svg" alt="Logo" /> </td>
   <td class="pts">15</td>
   <td class="prctg">100%</td>
   <td class="patt">15</td>
  </tr>
  <tr style="text-align: center;">
      <td rowspan="3" style="text-align: center; vertical-align: middle">Issue</td>
      <td colspan="2" style="text-align: center";>Primeira linha</td>
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
   <td>-</td>
  </tr>
  <tr style="text-align: center;">
      <td colspan="2" style="text-align: center";>CEO Information Reporting</td>
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
    <td class="number">2229</td>
    <td colspan="2"></td>
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
