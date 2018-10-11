<?php
echo "Power Calculate Here:";
?>
   <form action="connect.php" method="post">
<table>
  <tr>
    <th>Device</th>
    <th>Watt</th>
    <th>Quantity</th>
    <th>Total</th>
  </tr>
  <tr>
     <td> 
      <label>  Lamp(Bulb)</label> 
                                   
      </td> 
     <td><select name="watt" id="watt">
         <option value="40">40</option>
         <option value="60">60</option>
         <option value="100">100</option>
     </select></td>
     <td><input type="text" name="quantity" id="quantity" value=" " onkeyup="alltotal()" ></td>
     <td><input type="text" name="total" id="total" class="calc" value=" " onkeyup="alltotal()" onblur="findTotal()" ></td>
   </tr>

   <tr>
         <td> 
              <label>Lamp(CFL)</label> 
         </td> 
      <td><select name="watt" id="watt1">
          <option value="11">11</option>
          <option value="22">22</option>
      </select></td>
      <td><input type="text" name="quantity" id="quantity1" value=" " onkeyup="alltotal1()" ></td>
      <td><input type="text" name="total" id="total1" class="calc" value=" " onkeyup="alltotal1()" onblur="findTotal()"></td>

   </tr>

   <tr>
     <td> 
      <label>  Lamp(LED)</label> 
                                   
      </td> 
     <td><select name="watt" id="watt">
         <option value="3">3</option>
         <option value="18">18</option>
     </select></td>
     <td><input type="text" name="quantity" id="quantity" value=" " onkeyup="alltotal()" ></td>
     <td><input type="text" name="total" id="total" class="calc" value=" " onkeyup="alltotal()" onblur="findTotal()" ></td>
   </tr>

    <tr>
     <td> 
      <label>Tubelight</label> 
                                   
      </td> 
     <td><select name="watt" id="watt">
         <option value="40">40</option>
         <option value="60">60</option>
     </select></td>
     <td><input type="text" name="quantity" id="quantity" value=" " onkeyup="alltotal()" ></td>
     <td><input type="text" name="total" id="total" class="calc" value=" " onkeyup="alltotal()" onblur="findTotal()" ></td>
   </tr>

   <tr>
     <td> 
      <label>Ceiling Fan</label> 
                                   
      </td> 
     <td><select name="watt" id="watt">
         <option value="30">30</option>
         <option value="80">80</option>
        </select></td>
     <td><input type="text" name="quantity" id="quantity" value=" " onkeyup="alltotal()" ></td>
     <td><input type="text" name="total" id="total" class="calc" value=" " onkeyup="alltotal()" onblur="findTotal()" ></td>
   </tr>

   <tr>
     <td> 
      <label>LCD TV</label> 
                                   
      </td> 
     <td><select name="watt" id="watt">
         <option value="125">125</option>
         <option value="200">200</option>
     </select></td>
     <td><input type="text" name="quantity" id="quantity" value=" " onkeyup="alltotal()" ></td>
     <td><input type="text" name="total" id="total" class="calc" value=" " onkeyup="alltotal()" onblur="findTotal()" ></td>
   </tr>

   <tr>
     <td> 
      <label>LED TV</label> 
                                   
      </td> 
     <td><select name="watt" id="watt">
         <option value="20">20</option>
         <option value="150">150</option>
         
     </select></td>
     <td><input type="text" name="quantity" id="quantity" value=" " onkeyup="alltotal()" ></td>
     <td><input type="text" name="total" id="total" class="calc" value=" " onkeyup="alltotal()" onblur="findTotal()" ></td>
   </tr>

   <tr>
     <td> 
      <label>Refrigerator</label> 
                                   
      </td> 
     <td><select name="watt" id="watt">
         <option value="300">300</option>
         <option value="600">600</option>
         
     </select></td>
     <td><input type="text" name="quantity" id="quantity" value=" " onkeyup="alltotal()" ></td>
     <td><input type="text" name="total" id="total" class="calc" value=" " onkeyup="alltotal()" onblur="findTotal()" ></td>
   </tr>

   <tr>
     <td> 
      <label>Air Conditioner</label> 
                                   
      </td> 
     <td><select name="watt" id="watt">
         <option value="1500">1500</option>
      </select></td>
     <td><input type="text" name="quantity" id="quantity" value=" " onkeyup="alltotal()" ></td>
     <td><input type="text" name="total" id="total" class="calc" value=" " onkeyup="alltotal()" onblur="findTotal()" ></td>
   </tr>

   <tr>
     <td> 
      <label>Water Heater</label> 
                                   
      </td> 
     <td><select name="watt" id="watt">
         <option value="1000">1000</option>
         <option value="2000">2000</option>
         
     </select></td>
     <td><input type="text" name="quantity" id="quantity" value=" " onkeyup="alltotal()" ></td>
     <td><input type="text" name="total" id="total" class="calc" value=" " onkeyup="alltotal()" onblur="findTotal()" ></td>
   </tr>

    




   <tr>
  <td>Sum: <input type="text" name="total2" id="total2" onblur="findTotal()"/></td>
   </tr>       
</table>   
                                    <input type="submit" name="submit" class="thm-btn" value="Submit">
                                </form>
                            </div>
                        </div>
                        <script type="text/javascript">
function alltotal()
{
var a = document.getElementById("watt");
var b = document.getElementById("quantity");
var e = document.getElementById("total");

if(a.value=="")
{
a.value = 0;
}
if(b.value=="")
{
b.value = 1;
}
if(e.value=="")
{
e.value = 1;
}
c = a.value * b.value;


document.getElementById("total").value=c;


}
function alltotal1()
{
var a = document.getElementById("watt1");
var b = document.getElementById("quantity1");
var e = document.getElementById("total1");
if(a.value=="")
{
a.value = 0;
}
if(b.value=="")
{
b.value = 1;
}
if(e.value=="")
{
e.value = 1;
}
c= a.value * b.value;

document.getElementById("total1").value=c;
}
function findTotal(){
    var arr = document.getElementsByName('total');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseInt(arr[i].value))
            tot += parseInt(arr[i].value);
    }
    document.getElementById('total2').value = tot;
}
</script>