<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Chronos') }}</title>
</head>
<body style='overflow:hidden;margin:0;border:0'>
<style>
@media print {
    body{
        width: 105mm;
        height: 148.5mm;
        margin: 5mm 5mm 5mm 5mm; 
        /* change the margins as you want them to be. */
   } 
}   
    
.serviceorderpage
{
    BORDER-RIGHT: silver 1px solid;
    BORDER-TOP: silver 1px solid;
    FONT-SIZE: 11px;
    BORDER-LEFT: silver 1px solid;
    BORDER-BOTTOM: silver 1px solid;
    FONT-FAMILY: Tahoma;
    BACKGROUND-COLOR: white
}
.serviceorderpage TD
{
    FONT-SIZE: 11px;
    FONT-FAMILY: Tahoma, Verdana
}
.serviceorderpage TR
{
}
.serviceorderpage INPUT
{
    BORDER: none;
    PADDING-LEFT: 5px;
    FONT-SIZE: 11px;
    FONT-FAMILY: Tahoma, Arial, Verdana;
    COLOR:darkblue;
    BACKGROUND:#eeeeff;
}
.serviceorderpage SELECT
{
    BORDER: none;
    PADDING-LEFT: 5px;
    FONT-SIZE: 11px;
    FONT-FAMILY: Tahoma, Arial, Verdana;
    COLOR:darkblue;
}
.serviceorderpage TEXTAREA
{
    BORDER: silver 1px solid;
    FONT-SIZE: 11px;
    OVERFLOW: hidden;
    FONT-FAMILY: Tahoma, Verdana;
    BACKGROUND:#f0f0ff;
}
.serviceorderpage .header1
{
    FONT-WEIGHT: bold;
    FONT-SIZE: 10px;
    FONT-FAMILY: Tahoma, Verdana;
    BORDER: #7790aa 1px solid ;
    sBACKGROUND-COLOR: silver;
    xbackground-image: url('../../../images/bki.gif');
}
.serviceorderpage .title1
{
    FONT-WEIGHT: bold;
    FONT-SIZE: 16px;
    FONT-FAMILY: Arial, Verdana, Tahoma
}
.serviceorderpage .label1
{
    FONT-WEIGHT: bold;
    FONT-SIZE: 10px;
    FONT-FAMILY: Arial
}
.serviceorderpage .detail1
{
    BORDER-BOTTOM: #99b2cc 1px solid
}
.serviceorderpage .value1
{
    FONT-WEIGHT: normal;
    FONT-SIZE: 11px;
    FONT-FAMILY: Tahoma
}
.serviceorderpage HR
{
    FONT-SIZE: 1px;
    HEIGHT: 1px
}
</style>
<table class="serviceorderpage" border=0  style="width:500px;">
	<tr><td>
		<table border=0>
			<tr valign=center>
				<td nowrap style="width:100px;">
					<img src="{{ url('img/bcnet_sm.gif') }}" border=0 height=64 width=64>
				</td>	
				<td class="title1" style="width:230px;">
					&nbsp;&nbsp;SERVICE ORDER<br>&nbsp;&nbsp;&nbsp;&nbsp;
					<label class="label1">Date :</label>
					<label class="value1">{{ date("Y-m-d",strtotime($data->Issued_Date)) }}</label>
				</td>
				<td nowrap style="width:170px;">
					<table>
						<tr><td nowrap class="label1">SO No.</td><td nowrap><b>&nbsp;&nbsp;{{ $data->Id }}</b></td></tr>
						<tr><td nowrap class="label1">Type	</td><td nowrap>&nbsp;&nbsp;{{ $data->Service_Type }}</td></tr>
						<tr><td nowrap class="label1">Due Date  </td><td nowrap>&nbsp;&nbsp;{{ date("Y-m-d",strtotime($data->Date_Due)) }} </td></tr>
					</table>
				</td>
			</tr>
		</table>
	</td></tr>

	<tr><td>
		<table width="500px" border=0 cellpadding=0 cellspacing=0>
			<tr valign=center>
				<td colspan=2 class="header1">
					&nbsp;&nbsp;CUSTOMER INFORMATION
				</td>	
			</tr>
			<tr valign="center">
				<td>
					<table  cellpadding=0 cellspacing=0>
						<tr valign="center"><td class="label1" width="80px">&nbsp;Name</td><td nowrap width="170px" class="detail1">
							&nbsp;&nbsp;{{ $data->Account_Name }}</td></tr>
						<tr valign="center"><td class="label1">&nbsp;Company</td><td nowrap class="detail1"> 
							&nbsp;&nbsp;{{ $data->Account_Company }}</td></tr>
					</table>
				</td>	
				<td>
					<table  cellpadding=0 cellspacing=0>
						<tr><td nowrap class="label1" width="100px">&nbsp;&nbsp;&nbsp;Account No.</td>
							<td nowrap class="detail1" width="150px">&nbsp;&nbsp;{{ $data->Account }}</td></tr>
						<tr><td nowrap class="label1">&nbsp;&nbsp;&nbsp;Telephone Number</td>
							<td nowrap class="detail1">&nbsp;&nbsp;{{ $data->Service_Instance }}</td></tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan=4>
					<table  cellpadding=0 cellspacing=0>
						<tr><td nowrap class="label1"  width="80px">&nbsp;Address</td>
							<td nowrap class="detail1" width="420px">&nbsp;&nbsp;{{ $data->Service_AddressA }}</td></tr>
						<tr><td nowrap class="label1">&nbsp;</td>
							<td nowrap class="detail1">&nbsp;&nbsp;{{ $data->Service_AddressB }}</td></tr>
					</table>
				</td>
			</tr>
			<tr valign="top">
				<td colspan=4>
					<table  cellpadding=0 cellspacing=0>
						<tr>
							<td class="label1"  width="100px">&nbsp;Contact Person</td>
							<td class="detail1" width="150px">&nbsp;{{ $data->Contact_Person }}</td>
							<td class="label1"  width="100px">&nbsp;&nbsp;&nbsp;Contact Number</td>
							<td class="detail1" width="150px">&nbsp;{{ $data->Contact_No }}</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</td></tr>

	<tr><td>
                <div style="height: 140px">
		<table width="500px" border=0>
			<tr valign=center>
				<td colspan=2 class="header1">
					&nbsp;&nbsp;BILLING CHARGES
				</td>	
			</tr>
			<tr valign="top">
				<td height=100px>
					<table cellpadding=0 cellspacing=0 border=0 width="100%">
						<tr>
							<td rowspan=2 align=center class="label1" style="border: #99b2cc 1px solid;border-right: none">&nbsp;Particulars&nbsp;</td>
							<td colspan=2 align=center class="label1" style="border: #99b2cc 1px solid;border-right: none">&nbsp;Amount&nbsp;</td>
							<td colspan=2 align=center class="label1" style="border: #99b2cc 1px solid;border-right: none">&nbsp;Date&nbsp;</td>
							<td colspan=2 align=center class="label1" style="border: #99b2cc 1px solid;">&nbsp;Equipment&nbsp;</td>
						</tr>
						<tr>
							<td class="label1" style="border-bottom: #99b2cc 1px solid;border-left: #99b2cc 1px solid">&nbsp;Charges&nbsp;</td>
							<td class="label1" style="border-bottom: #99b2cc 1px solid;border-left: #99b2cc 1px solid">&nbsp;Payment&nbsp;</td>
							<td class="label1" align=center style="border-bottom: #99b2cc 1px solid;border-left: #99b2cc 1px solid">&nbsp;Active&nbsp;</td>
							<td class="label1" align=center style="border-bottom: #99b2cc 1px solid;border-left: #99b2cc 1px solid">&nbsp;Deactive&nbsp;</td>
							<td class="label1" style="border-bottom: #99b2cc 1px solid;border-left: #99b2cc 1px solid">&nbsp;Phone&nbsp;</td>
							<td class="label1" style="border: #99b2cc 1px solid;border-top: none">&nbsp;Serial&nbsp;</td>
						</tr>
@php
    $tAmt = 0; $tPay = 0;
@endphp
@foreach ($data->details as $detail)  
    @php
        $tAmt += $detail->Amount;
        $tPay += $detail->Payment;
    @endphp

						<tr>
							<td class="detail1">&nbsp;
								{{ @$productName }} </td>
							<td class="detail1" align=right>&nbsp;
								{{ $detail->Amount }}</td>
							<td class="detail1" align=right>&nbsp;
								{{ $detail->Payment }}</td>
							<td class="detail1" align=center>&nbsp;
								{{ $detail->Active_Date }}</td>
							<td class="detail1" align=center>&nbsp;
								{{ $detail->InActive_Date }}</td>
							<td class="detail1" align=center>&nbsp;
								{{ $detail->Service_Instance }}</td>
							<td class="detail1" align=center>&nbsp;
								{{ $detail->Eqpt_SerialNo }}</td>
						</tr>
@endforeach
						<tr>
							<td class="detail1">&nbsp;</td>
							<td class="detail1">&nbsp;</td>
							<td class="detail1">&nbsp;</td>
							<td class="detail1">&nbsp;</td>
							<td class="detail1">&nbsp;</td>
							<td class="detail1">&nbsp;</td>
							<td class="detail1">&nbsp;</td>
						</tr>
						<tr>
							<td class="label1">&nbsp;&nbsp;Total</td>
							<td align=right>{{ $tAmt }}</td>
							<td align=right>{{ $tPay }}</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
					</table>
				</td>	
			</tr>
		</table>
            </div>
	</td></tr>


	<tr valign=top>
		<td  class="header1">
			&nbsp;<b>Remarks</b>
		</td>
	</tr>
	<tr valign=top><td>
		<textarea name="Remarks" ID="Remarks" readonly disabled1 style="width:500px;height:120px">
                          {{ trim($data->Remarks) }}
		</textarea>
	</td></tr>

	<tr><td>
		<table border=1 width="500px" cellpadding=2 cellspacing=0>
			<tr valign=top>
				<td nowrap>
					Requested By : 
					<div align=center>{{ $data->RequestedBy }}</div>
				</td>	
				<td nowrap>
					Prepared By : 
					<div align=center>{{ $data->Customer_Rep }}</div>
				</td>	
				<td nowrap>
					Approved By : 
					<div align=center>F. F. Cruz</div>
				</td>	
			</tr>
		</table>
	</td></tr>

	<tr><td>
		<table width="500px" border=0>
			<tr valign=center>
				<td colspan=2 class="header1" Align=center>
					&nbsp;&nbsp;TECHNICAL USE
				</td>	
			</tr>
			</tr>
		</table>
	</td></tr>
	<tr><td>
		<table border=1 width="500x" cellpadding=2 cellspacing=0>
			<tr valign=top>
				<td nowrap width=25%>
					Completed By : <div align=center>{{ $data->Completed_By }}</div>
				</td>	
				<td nowrap width=50%>
					Completion Date : {{ $data->Date_Completed }}
					<hr class="mt-0 mb-0">
					Remarks : @If ( ! $data->Date_Cancelled )
                                                    {{ $data->Remark_Completed }}
						  @else
                                                    <b><font color=red>Cancelled :</font></b>
							{{ $data->Date_Cancelled }} <br>
							{{ $data->Remark_Cancelled }}
						  @endif
				</td>	
				<td nowrap width=25%>
					Noted By : <div align=center>G.E.S.</div>
				</td>	
			</tr>
		</table>
	</td></tr>
	<tr><td>
		<table width="500px" border=0>
			<tr valign=center>
				<td colspan=2 class="header1" Align=center>
					&nbsp;&nbsp;BILLING USE
				</td>	
			</tr>
			</tr>
		</table>
	</td></tr>
	<tr><td>
		<table border=1 style="width:500px;height:10px" cellpadding=2 cellspacing=0>
			<tr valign=top>
				<td nowrap width=25%>
					Completed By : <div align=center>{{ $data->Billed_By }}</div>
				</td>	
				<td nowrap width=50%>
					Completion Date : {{ $data->Date_Billed }}
                                       <hr class="mt-0 mb-0">
					Remarks : {{ $data->Remark_Billed }}

				</td>	
				<td nowrap width=25%>
					Noted By : <div align=center>&nbsp;</div>
				</td>	
			</tr>
		</table>
	</td></tr>

</table>
</body>