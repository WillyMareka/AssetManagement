<html>
<head>
	<style type="text/css">
	/*@page { sheet-size: A5-L; }*/
	@page bigger { sheet-size: 420mm 370mm; }
	@page toc { sheet-size: A4; }

	h1.bigsection {
		page-break-before: always;
		page: bigger;
	}
	h1, h2, h3, h4, p
	{
		padding: 0;
		margin: 0;
	}
	.row-container
	{
		float: left;
		clear: both;
	}

	.row-container div
	{
		float: left;
	}
	.title-holder
	{
		width: 100%;
		text-align: center;
	}

	.title-holder p
	{
		padding: 0;
		margin: 0;
		font-size: 80%;
	}
	.address-holder
	{
		/*width: 30%;*/
	}
	.table
	{
		width: 100%;
		border: 1px solid #111;
		border-collapse: 0;
	}
	.table td
	{
		border: 1px solid black;
		padding: 5px;
	}
	.underlined
	{
		border-bottom: 1px solid black;
	}

	.receipt-details
	{
		margin-top: 30px;
	}
	.receipt-details p
	{
		text-align: center;
		font-size: 130%;
		padding: 1px;
	}
	input[type="checkbox"] {
		margin: 0;
		width: 100px;
	}
	</style>
</head>
<body>
	<div class = "row-container">
		<div class = "title-holder">
			<h1>ROAJOMA ENTERPRISES</h1>
			<P>Address: P.O. BOX 123, NAIROBI</P>
			<p>Email: roajoma@gmail.com</p>
			<p>Phone: +254 725 160 399</p>
			<h2>CASH RECEIPT</h2>
			<!-- <p><?php echo date('d-M-Y'); ?></p> -->
		</div>
	</div>
	<div class = "row-container" >
		<div style = "float: left;width: 50%;"><strong>Cash Receipt #: </strong>569963</div>
		<div style = "float: right;width: 50%;text-align: right;"><strong>Date: </strong><?php echo date('d/M/Y');?></div>
	</div>

	<div class = "row-container receipt-details">
		<p>Cash Received From: <span class = "underlined" style = "">Chrispine Otaalo</span> of KSH. <span class = "underlined">20000.00</span></p>
		<p>For: <span class = "underlined">January 2015 Rent</span></p>
	</div>
	<div class = "row-container" style = "margin-top: 40px;">
		<div style = "width: 50%;">
			<p><strong>Payment Received In:</strong></p>
			<table>
				<tr>
					<td>Cash</td>
					<td style = "border: 1px solid black; width: 50px;"></td>
				</tr>
				<tr>
					<td>Pay Slip</td>
					<td style = "border: 1px solid black; width: 50px;"></td>
				</tr>
				<tr>
					<td>Mpesa</td>
					<td style = "border: 1px solid black; width: 50px;"></td>
				</tr>
			</table>
		</div>
		<div style = "width: 50%; float: right;">
			<div class = "table-holder">
				<table class = "table">
					<tr>
						<td>Amount Due: </td>
						<td>120000.00</td>
					</tr>
					<tr>
						<td>Amount Received: </td>
						<td>120000.00</td>
					</tr>
					<tr>
						<td>Balance Due: </td>
						<td>0.00</td>
					</tr>
				</table>
			</div>
		</div>
	</div>

	<div class = "row-container" style = "margin-top: 30px;">
		<div style="float: right; width: 60%;text-align: right;">
			<center>Served By: Chrispine Otaalo</center>
		</div>
	</div>
</body>
</html>