<?php 

class Apriori {
    private $delimiter   = ','; 
    private $minSup      = 2; //default number of occurence of the set of elements
    private $minConf     = 75;  //minimum % of how sure the association of each elements occure in the frequency
     
    private $rules       = array(); 
    private $table       = array(); 
    private $allthings   = array();
    private $allsups     = array(); 
    private $keys        = array(); 
    private $freqItmsts  = array();    
    private $phase       = 1;
    
    //maxPhase>=2
    private $maxPhase    = 20; 
    
    private $fiTime      = 0;
    private $arTime      = 0; 
    
    public function setDelimiter($char)
    {
       $this->delimiter = $char;
    }
    
    public function setMinSup($int)
    {
       $this->minSup = $int;
    }
    
    public function setMinConf($int)
    {
       $this->minConf = $int;
    }
    
    public function setMaxScan($int)
    {
       $this->maxPhase = $int;
    }
    
    public function getDelimiter()
    {
       return $this->delimiter;
    }
    
    public function getMinSup()
    {
       return $this->minSup;
    }
    
    public function getMinConf()
    {
       return $this->minConf;
    }
    
    public function getMaxScan()
    {
       return $this->maxPhase;
    }
    
    private function makeTable($db)
    { 
	//variables
       $table   = array();
       $array   = array();
       $counter = 1;
       //check if it is an array, if not, it is a file. parse that file
       if(!is_array($db)) 
          {
             $db = file($db);
          }
  
       $num = count($db);  //get total number of transactions
       for($i=0; $i<$num; $i++) 
        {
             $tmp  = $db[$i]; //each transactions have elements. store this set of elements in $tmp
             $num1 = count($tmp); //count number of elements in the set ($tmp)
             $x    = array(); 
             
			 //for every items inside $tmp
			 for($j=0; $j<$num1; $j++) 
                {
                   $x = trim($tmp[$j]); //remove leading spaces and ending spaces.
                   //if it is blank, don't go further and go to the next item
				   if($x==='') 
                      {
                         continue;
                      }
                   //if $keys['v->k'] have no value yet,
                   if(!isset($this->keys['v->k'][$x]))
                      {
                         $this->keys['v->k'][$x]         = $counter; //set $keys['v->k'][$x] equal to the counter
                         $this->keys['k->v'][$counter]   = $x; //set $keys['k->'][$counter] equal to $x which is the element inside $tmp
                         $counter++; //increment counter
                      } 
					
                   if(!isset($array[$this->keys['v->k'][$x]]))
                      {
                         $array[$this->keys['v->k'][$x]] = 1; 
                         $this->allsups[$this->keys['v->k'][$x]] = 1;                        
                      }
                   else
                      {
                         $array[$this->keys['v->k'][$x]]++; 
                         $this->allsups[$this->keys['v->k'][$x]]++;
                      }
               
                   $table[$i][$this->keys['v->k'][$x]] = 1; 
                } 
          }
 
       $tmp = array();
       foreach($array as $item => $sup) 
          { 
             if($sup>=$this->minSup)
                {
                   
                   $tmp[] = array($item);
                }
          }
  
       $this->allthings[$this->phase] = $tmp;
       $this->table = $table;  
    }

    private function scan($arr, $implodeArr = '')
    { 
       $cr = 0;
          
       if($implodeArr)
          { 
             if(isset($this->allsups[$implodeArr]))
                { 
                   return $this->allsups[$implodeArr];
                }
          }
       else
          {
             sort($arr);
             $implodeArr = implode($this->delimiter, $arr);
             if(isset($this->allsups[$implodeArr]))
                { 
                  return $this->allsups[$implodeArr];
                }
          } 
       
       $num  = count($this->table);
       $num1 = count($arr); 
       for($i=0; $i<$num; $i++)
          {
             $bool = true; 
             for($j=0; $j<$num1; $j++)
                {
                   if(!isset($this->table[$i][$arr[$j]]))
                      {
                         $bool = false;
                         break;
                      }
                }
         
             if($bool)
                {
                   $cr++;
                }
          }
          
       $this->allsups[$implodeArr] = $cr;
       
      return $cr;
    }

    private function combine($arr1, $arr2)
    { 
       $result = array();
       
       $num  = count($arr1);
       $num1 = count($arr2); 
       for($i=0; $i<$num; $i++)
          {
             if(!isset($result['k'][$arr1[$i]]))
                {
                   $result['v'][] = $arr1[$i];
                   $result['k'][$arr1[$i]] = 1;
                }
          }

       for($i=0; $i<$num1; $i++)
          {
             if(!isset($result['k'][$arr2[$i]]))
                {
                   $result['v'][] = $arr2[$i];
                   $result['k'][$arr2[$i]] = 1;
                }
          }
      
      return $result['v'];
    } 
    
    private function realName($arr)
    { 
       $result = ''; 
       
       $num = count($arr);
       for($j=0; $j<$num; $j++)
          { 
             if($j)
               {
                  $result .= $this->delimiter;
               }
                  
             $result .= $this->keys['k->v'][$arr[$j]]; 
          }
      
      return $result;
    }

    //1-2=>2-3 : false
    //1-2=>5-6 : true
    private function checkRule($a, $b)
    { 
       $a_num = count($a); 
       $b_num = count($b); 
       for($i=0; $i<$a_num; $i++) 
          { 
             for($j=0; $j<$b_num; $j++) 
                {
                   if($a[$i]==$b[$j])
                      {
                         return false;
                      }
                }
          }

      return true;
    } 

    private function confidence($sup_a, $sup_ab)
    {
        return round(($sup_ab / $sup_a) * 100, 2);
    }
  
    private function subsets($items) 
    {  
       $result  = array(); 
       $num     = count($items); 
       $members = pow(2, $num); 
       for($i=0; $i<$members; $i++) 
          { 
             $b   = sprintf("%0".$num."b", $i); 
             $tmp = array();  
             for($j=0; $j<$num; $j++) 
                { 
                   if($b[$j]=='1') 
                      {  
                         $tmp[] = $items[$j];   
                      }
                } 
      
             if($tmp)
                { 
                   sort($tmp);
                   $result[] = $tmp; 
                }  
          } 
   
      return $result; 
    }
    
    private function freqItemsets($db)
    { 
       $this->fiTime = $this->startTimer();  
       //prepare the table for storing information
	   $this->makeTable($db);   
       while(1)
          {
			//if this current while loop hits the maxPhase, exit while loop
             if($this->phase>=$this->maxPhase)
                {
                   break;
                }
			//count the number of all elements
             $num = count($this->allthings[$this->phase]);
             $cr  = 0;
			 //for every element of the collection of all element [$allthings]
             for($i=0; $i<$num; $i++)  
                {    
				//for every set of elements, inside each transactions of all element
                   for($j=$i; $j<$num; $j++) 
                      {  
						//if we hit the same element, continue to the next element
                         if($i==$j)
                            {
                               continue;
                            }
						//combine the current element of this for loop, with the current element in the while loop 
                         $item = $this->combine($this->allthings[$this->phase][$i], $this->allthings[$this->phase][$j]);
						//sort the elements
                         sort($item);  
                         $implodeArr = implode($this->delimiter, $item);
                         //if the frequent itemlist has no value
						 if(!isset($this->freqItmsts[$implodeArr]))
                            {
								//scan the item and put it in $sup
                               $sup = $this->scan($item, $implodeArr);
							   //if the pair is equal to or more than the minimum support/ minimum number of frequency to be called 'frequent'
                               if($sup>=$this->minSup)
                                  {
									//put the element in the allthings
                                     $this->allthings[$this->phase+1][] = $item;
									 //reset the $freqItmsts to 1
                                     $this->freqItmsts[$implodeArr] = 1;
                                     $cr++;
                                  }
                            } 
                      }
                }
			if($cr<=1)
                {
                   break;
                }
      
            $this->phase++;  
          } 
          //for every freqItemsets as a key pair value 
      foreach($this->freqItmsts as $k => $v)
          {
		  //get all elements inside $k, which is the key of the freqItmsts
             $arr = explode($this->delimiter, $k);
			 //count the number of elements of freqItmsts
             $num = count($arr); 
			 //if it is 3 and above
             if($num>=3)
                { 
					//get the subset of the elements in $arr
                   $subsets = $this->subsets($arr);  
				   //get the number of elements inside the subset of $arr
                   $num1    = count($subsets);
					//for every element inside the subset of $arr
                   for($i=0; $i<$num1; $i++)
                      {
					  //if it is less than the number of $arr
                         if(count($subsets[$i])<$num)
                            {
								//remove the set in $freqItemsts
                               unset($this->freqItmsts[implode($this->delimiter, $subsets[$i])]);   
                            } 
                         else
                            {
                               break;
                            }
                      }
                } 
          }
     
       $this->fiTime = $this->stopTimer($this->fiTime); 
    }
    
    public function process($db)
    {
       $checked = $result = array();     
       
       $this->freqItemsets($db);
       $this->arTime = $this->startTimer();
      
       foreach($this->freqItmsts as $k => $v)
          { 
             $arr     = explode($this->delimiter, $k); 
             $subsets = $this->subsets($arr);    
             $num     = count($subsets); 
             for($i=0; $i<$num; $i++)
                {
                   for($j=0; $j<$num; $j++)
                      {
                         if($this->checkRule($subsets[$i], $subsets[$j]))
                            {
                               $n1 = $this->realName($subsets[$i]);
                               $n2 = $this->realName($subsets[$j]);
                                     
                               $scan = $this->scan($this->combine($subsets[$i], $subsets[$j]));
                               $c1   = $this->confidence($this->scan($subsets[$i]), $scan);
                               $c2   = $this->confidence($this->scan($subsets[$j]), $scan); 
                              
                               if($c1>=$this->minConf)
                                  {
                                     $result[$n1][$n2] = $c1; 
                                  }
                                 
                               if($c2>=$this->minConf)
                                  { 
                                     $result[$n2][$n1] = $c2; 
                                  } 
                                             
                               $checked[$n1.$this->delimiter.$n2] = 1;
                               $checked[$n2.$this->delimiter.$n1] = 1; 
                            }
                      }
                } 
          }
      
       $this->arTime = $this->stopTimer($this->arTime); 
 
      return $this->rules = $result;
    }
    
    public function printFreqItemsets()
    {
       echo 'Time: '.$this->fiTime.' second(s)<br />===============================================================================<br />';
         
       foreach($this->freqItmsts as $k => $v)
          {
             $tmp  = '';
             $tmp1 = '';
             $k    = explode($this->delimiter, $k);
             $num  = count($k);
             for($i=0; $i<$num; $i++)
                {  
                   if($i)
                      {
                         $tmp  .= $this->delimiter.$this->realName($k[$i]);
                         $tmp1 .= $this->delimiter.$k[$i];
                      }
                   else
                      {
                         $tmp  = $this->realName($k[$i]);
                         $tmp1 = $k[$i];
                      } 
                }
             $freq = $tmp.' = '.$this->allsups[$tmp1];
             
             echo '{'.$tmp.'} = '.$this->allsups[$tmp1]." ";
             
             echo "<a href = display.php?freq=$freq><input type = 'button' style = 'border-radius:10px; margin-left:15px;' value = 'GET ACCOUNTS'></a>";
             echo "<a href = viewAbnormalResultPercentage.php><input type = 'button' style = 'border-radius:10px; margin-left:15px;' value = 'Summary Results'></a>";
          }
    }   
    
    public function saveFreqItemsets($filename)
    {
       $content = '';
                
       foreach($this->freqItmsts as $k => $v)
          {
             $tmp  = '';
             $tmp1 = '';
             $k    = explode($this->delimiter, $k);
             $num  = count($k);
             for($i=0; $i<$num; $i++)
                {  
                   if($i)
                      {
                         $tmp  .= $this->delimiter.$this->realName($k[$i]);
                         $tmp1 .= $this->delimiter.$k[$i];
                      }
                   else
                      {
                         $tmp  = $this->realName($k[$i]);
                         $tmp1 = $k[$i];
                      } 
                }
             
             $content .= '{'.$tmp.'} = '.$this->allsups[$tmp1]."\n"; 
          }
          
        file_put_contents($filename, $content);
    }
    
    public function getFreqItemsets()
    {
       $result = array();
       
       foreach($this->freqItmsts as $k => $v)
          {
             $tmp        = array();
             $tmp['sup'] = $this->allsups[$k];
             $k          = explode($this->delimiter, $k);
             $num        = count($k);
             for($i=0; $i<$num; $i++)
                {  
                   $tmp[] = $this->realName($k[$i]); 
                }
             
             $result[] = $tmp; 
          }
       
      return $result;
    } 
    
    public function printAssociationRules()
    {
       echo 'Time: '.$this->arTime.' second(s)<br />===============================================================================<br />';
        
       foreach($this->rules as $a => $arr)
          {
             foreach($arr as $b => $conf)
                { 
                   echo "$a => $b = $conf%<br />";
                }
          }
    }

    public function saveAssociationRules($filename)
    {
        $content = '';
                
       foreach($this->rules as $a => $arr)
          {
             foreach($arr as $b => $conf)
                { 
                   $content .= "$a => $b = $conf%\n"; 
                }
          } 
          
        file_put_contents($filename, $content);
    }
    
    public function getAssociationRules()
    {
        return $this->rules;
    } 
    
    private function startTimer()
    {
       list($usec, $sec) = explode(" ", microtime());
       return ((float)$usec + (float)$sec);
    }
    
    private function stopTimer($start, $round=2)
    {
       $endtime = $this->startTimer()-$start;
       $round   = pow(10, $round);
       return round($endtime*$round)/$round;
    }
}  
?>
