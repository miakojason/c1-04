<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
	<p class="t cent botli">進站總人數管理</p>
	<form method="post" action="./api/edit_info.php">
		<table width="100%">
			<tr class="yel">
				<td width="45%">進站總人數:</td>
				<td width="7%"><input type="text" name="total" value="<?=$DB->find(1)['total'];?>"></td>
			</tr>
		</table>
		<table style="margin-top:40px; width:70%;">
			<tr>
				<input type="hidden" name="table" value="<?= $do; ?>">
				<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
			</tr>
		</table>
	</form>
</div>