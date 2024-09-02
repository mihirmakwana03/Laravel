<html>
	<head>
		<title>Control Statement</title>
	</head>

<body>

<title>  
 @hasSection('title')  
 @yield('title') - App Name  
 @else  
 Control  
@endif  
</title>  

	<font size='5' face='Arial'>
		@php
		$id = 1;
		@endphp

		@if(($id) == 1)
		student id is equal to 1.
		@else  			
		student id is not equal to 1
		@endif  	
	</font>
</body>

</html>