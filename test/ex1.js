
function GetPriority(ind, index, num)
{
	var res = -1;
	document.write("<p>Get Priority</p>");
	if((ind - index) > 0)
	{
		if((ind - index) <= num)
		{
			res = num - (ind - index);
		}
		else  
		{
			res = ind - index - num - 1;
		}
	}
	else 
	{
		if((index - ind) <= num) 
		{
			res = num - (index - ind);
		}
		else
		{		
			res = index - ind - num - 1;
		}
	}
	return res;
}