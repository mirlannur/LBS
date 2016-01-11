function GetPriority(a, b, num)
{
	document.write("<p>Get Priority</p>");
	if(a > b)
	{
		if((a - b) <= num / 2) return a - b;
		else  return num + b - a;
	}
	else 
	{ 
		if((b - a) <= num / 2) return b - a;
		else return num + a - b;
	}
}

function checkRL(ind, index, num)
{
	document.write("<p>check RL</p>");
	if((ind - index) > 0)
	{
		if((ind - index) <= num) return 1;
		else return -1;
	}
	else 
	{
		if((index - ind) <= num) return 1;
		else return -1;
	}
}