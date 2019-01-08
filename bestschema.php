<html>
<head>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/style1.css">
</head>
<body>
	<form method="POST" action="showschema.php" id="form">
		<fieldset>
			<legend>Schema</legend>
			<div>
				<div align="center">
					<input style="width: 100px; height: 50px;" type="submit" name="submit" value="Submit"/>
				</div><br>
				<h2>Chung</h2>
				<label for="nameOrganization" style="font-weight: bold;">nameOrganization</label>
				<input name="nameOrganization" type="text" class="input" size="25"/>
				<label for="urlOrganization" style="font-weight: bold;">urlOrganization</label>
				<input name="urlOrganization" type="text" class="input" size="25"/>
				<label for="namePerson" style="font-weight: bold;">namePerson</label>
				<input name="namePerson" type="text" class="input" size="25"/>
				<label for="urlPerson" style="font-weight: bold;">urlPerson</label>
				<input name="urlPerson" type="text" class="input" size="25"/><br><br>
				<label for="urlLogo" style="font-weight: bold;">urlLogo</label>
				<input name="urlLogo" type="text" class="input" size="25"/>
			</div>
			<table width="200" border="0" cellpadding="10" cellspacing="10" id="schimg">
				<th>Schema image</th>
				<tr>
					<td style="font-weight: bold"><div align="right"><label for="nameimg">nameimg(tên ảnh không chứa đuôi jpg)</label></div></td>
					<td><input name="nameimg" type="text" class="input" size="25"/></td>
				</tr>
				<tr>
					<td style="font-weight: bold"><div align="right"><label for="alt">Thẻ alt</label></div></td>
					<td><input name="alt" type="text" class="input" size="25"/></td>
				</tr>
				<tr>
					<td style="font-weight: bold"><div align="right"><label for="description">description(thẻ mô tả ảnh)</label></div></td>
					<td><input name="description" type="text" class="input" size="25"/></td>
				</tr>
				<tr>
					<td height="23" style="font-weight: bold"><div align="right"><label for="contentUrl">contentUrl(link ảnh)</label></div></td>
					<td><input name="contentUrl" type="text" class="input" size="25"/></td>
				</tr>
				<tr>
					<td height="23" style="font-weight: bold"><div align="right"><label for="keywords">keywords</label></div></td>
					<td><input name="keywords" type="text" class="input" size="25"/></td>
				</tr>
				<tr>
					<td height="23" style="font-weight: bold"><div align="right"><label for="height">height</label></div></td>
					<td><input name="height" type="text" class="input" size="25"/></td>
				</tr>
				<tr>
					<td height="23" style="font-weight: bold"><div align="right"><label for="width">width</label></div></td>
					<td><input name="width" type="text" class="input" size="25"/></td>
				</tr>
				<tr>
					<td height="23" style="font-weight: bold"><div align="right"><label for="linkSameas1">linkSameas1(link social của Person)</label></div></td>
					<td><input name="linkSameas1" type="text" class="input" size="25"/></td>
				</tr>
				<tr>
					<td height="23" style="font-weight: bold"><div align="right"><label for="linkSameas2">linkSameas2</label></div></td>
					<td><input name="linkSameas2" type="text" class="input" size="25"/></td>
				</tr>
				<tr>
					<td height="23" style="font-weight: bold"><div align="right"><label for="linkSameas3">linkSameas3</label></div></td>
					<td><input name="linkSameas3" type="text" class="input" size="25"/></td>
				</tr>
				<tr>
					<td height="23" style="font-weight: bold"><div align="right"><label for="linkSameas4">linkSameas4</label></div></td>
					<td><input name="linkSameas4" type="text" class="input" size="25"/></td>
				</tr>
				<tr>
					<td height="23" style="font-weight: bold"><div align="right"><label for="nameOrganization">nameOrganization(điền ở phần chung)</label></div></td>
				</tr>
				<tr>
					<td height="23" style="font-weight: bold"><div align="right"><label for="urlOrganization">urlOrganization(điền ở phần chung)</label></div></td>
				</tr>
				<tr>
					<td height="23" style="font-weight: bold"><div align="right"><label for="namePerson">namePerson(điền ở phần chung)</label></div></td>
				</tr>
				<tr>
					<td height="23" style="font-weight: bold"><div align="right"><label for="urlPerson">urlPerson(điền ở phần chung)</label></div></td>
				</tr>
    </table>
			<table width="200" border="0" cellpadding="10" cellspacing="10" id="schvi">
      <th>Schema video</th>
      <tr>
        <td style="font-weight: bold"><div align="right"><label for="namevi">namevi(tên video)</label></div></td>
        <td><input name="namevi" type="text" class="input" size="25"/></td>
      </tr>
      <tr>
        <td style="font-weight: bold"><div align="right"><label for="descriptionvi">descriptionvi(mô tả video)</label></div></td>
        <td><input name="descriptionvi" type="text" class="input" size="25"/></td>
      </tr>
      <tr>
        <td height="23" style="font-weight: bold"><div align="right"><label for="thumbnailUrl">thumbnailUrl(hình đại diện video, get tại get-youtube-thumbnail.com)</label></div></td>
        <td><input name="thumbnailUrl" type="text" class="input" size="25"/></td>
      </tr>
      <tr>
        <td height="23" style="font-weight: bold"><div align="right"><label for="uploadDate">uploadDate(ví dụ:2017-03-27T08:00:00+08:00)</label></div></td>
        <td><input name="uploadDate" type="text" class="input" size="25"/></td>
      </tr>
      <tr>
        <td height="23" style="font-weight: bold"><div align="right"><label for="duration">duration(thời lượng video, ví dụ: PT5M27S)</label></div></td>
        <td><input name="duration" type="text" class="input" size="25"/></td>
      </tr>
      <tr>
        <td height="23" style="font-weight: bold"><div align="right"><label for="urlLogo">urlLogo(điền ở phần chung)</label></div></td>
      </tr>
      <tr>
        <td height="23" style="font-weight: bold"><div align="right"><label for="widthLogo">widthLogo</label></div></td>
        <td><input name="widthLogo" type="text" class="input" size="25"/></td>
      </tr>
      <tr>
        <td height="23" style="font-weight: bold"><div align="right"><label for="heightLogo">heightLogo</label></div></td>
        <td><input name="heightLogo" type="text" class="input" size="25"/></td>
      </tr>
      <tr>
        <td height="23" style="font-weight: bold"><div align="right"><label for="contentUrlvi">contentUrlvi</label></div></td>
        <td><input name="contentUrlvi" type="text" class="input" size="25"/></td>
      </tr>
      <tr>
        <td height="23" style="font-weight: bold"><div align="right"><label for="embedUrl">embedUrl(lấy trong phần share của video)</label></div></td>
        <td><input name="embedUrl" type="text" class="input" size="25"/></td>
      </tr>
      <tr>
        <td height="23" style="font-weight: bold"><div align="right"><label for="interactionCount">interactionCount(lượt view tại lúc đó)</label></div></td>
        <td><input name="interactionCount" type="text" class="input" size="25"/></td>
      </tr>
    </table>
    <table width="200" border="0" cellpadding="10" cellspacing="10" id="schqtion">
			<th>Schema Question</th>
			<tr>
				<td style="font-weight: bold"><div align="right"><label for="qtion">Câu hỏi</label></div></td>
				<td><input name="qtion" type="text" class="input" size="25"/></td>
			</tr>
			<tr>
				<td style="font-weight: bold"><div align="right"><label for="urlq">Url câu hỏi</label></div></td>
				<td><input name="urlq" type="text" class="input" size="25"/></td>
			</tr>
			<tr>
				<td height="23" style="font-weight: bold"><div align="right"><label for="nameAuthor">nameAuthor(random tên người hỏi)</label></div></td>
				<td><input name="nameAuthor" type="text" class="input" size="25"/></td>
			</tr>
			<tr>
				<td height="23" style="font-weight: bold"><div align="right"><label for="aswer">Trả lời</label></div></td>
				<td><input name="aswer" type="text" class="input" size="25"/></td>
			</tr>
			<tr>
				<td height="23" style="font-weight: bold"><div align="right"><label for="urla">Url trả lời</label></div></td>
				<td><input name="urla" type="text" class="input" size="25"/></td>
			</tr>
			<tr>
				<td height="23" style="font-weight: bold"><div align="right"><label for="namePerson">namePerson(điền ở phần chung)</label></div></td>
			</tr>
			<tr>
				<td height="23" style="font-weight: bold"><div align="right"><label for="urlPerson">urlPerson(điền ở phần chung)</label></div></td>
			</tr>
		</table>
		<table width="200" border="0" cellpadding="10" cellspacing="10" id="schbrc">
			<th>Schema Breadcrumb</th>
			<tr>
				<td style="font-weight: bold"><div align="right"><label for="id1">Link 1</label></div></td>
				<td><input name="id1" type="text" class="input" size="25"/></td>
			</tr>
			<tr>
				<td style="font-weight: bold"><div align="right"><label for="name1">Tên thay thế 1</label></div></td>
				<td><input name="name1" type="text" class="input" size="25"/></td>
			</tr>
			<tr>
				<td height="23" style="font-weight: bold"><div align="right"><label for="img1">Link ảnh 1</label></div></td>
				<td><input name="img1" type="text" class="input" size="25"/></td>
			</tr>
			<tr>
				<td style="font-weight: bold"><div align="right"><label for="id2">Link 2</label></div></td>
				<td><input name="id2" type="text" class="input" size="25"/></td>
			</tr>
			<tr>
				<td style="font-weight: bold"><div align="right"><label for="name2">Tên thay thế 2</label></div></td>
				<td><input name="name2" type="text" class="input" size="25"/></td>
			</tr>
			<tr>
				<td height="23" style="font-weight: bold"><div align="right"><label for="img2">Link ảnh 2</label></div></td>
				<td><input name="img2" type="text" class="input" size="25"/></td>
			</tr>
			<tr>
				<td style="font-weight: bold"><div align="right"><label for="id3">Link 3</label></div></td>
				<td><input name="id3" type="text" class="input" size="25"/></td>
			</tr>
			<tr>
				<td style="font-weight: bold"><div align="right"><label for="name3">Tên thay thế 3</label></div></td>
				<td><input name="name3" type="text" class="input" size="25"/></td>
			</tr>
			<tr>
				<td height="23" style="font-weight: bold"><div align="right"><label for="img3">Link ảnh 3</label></div></td>
				<td><input name="img3" type="text" class="input" size="25"/></td>
			</tr>
		</table>
		<table width="200" border="0" cellpadding="10" cellspacing="10" id="schblog">
				<th>Schema Blogposting</th>
				<tr>
					<td style="font-weight: bold"><div align="right"><label for="linkbv">Link bài viết</label></div></td>
					<td><input name="linkbv" type="text" class="input" size="25"/></td>
				</tr>
				<tr>
					<td style="font-weight: bold"><div align="right"><label for="linkimg">Link img</label></div></td>
					<td><input name="linkimg" type="text" class="input" size="25"/></td>
				</tr>
				<tr>
					<td height="23" style="font-weight: bold"><div align="right"><label for="hline">Headline(title bài viết)</label></div></td>
					<td><input name="hline" type="text" class="input" size="25"/></td>
				</tr>
				<tr>
					<td height="23" style="font-weight: bold"><div align="right"><label for="aline">Đoạn đầu bài viết</label></div></td>
					<td><input name="aline" type="text" class="input" size="25"/></td>
				</tr>
				<tr>
					<td height="23" style="font-weight: bold"><div align="right"><label for="dateCreate">dateCreate</label></div></td>
					<td><input name="dateCreate" type="text" class="input" size="25"/></td>
				</tr>
				<tr>
					<td height="23" style="font-weight: bold"><div align="right"><label for="contentLocation">contentLocation(ví dụ: Hồ Chí Minh, VN)</label></div></td>
					<td><input name="contentLocation" type="text" class="input" size="25"/></td>
				</tr>
				<tr>
					<td height="23" style="font-weight: bold"><div align="right"><label for="kw1">keywords 1</label></div></td>
					<td><input name="kw1" type="text" class="input" size="25"/></td>
				</tr>
				<tr>
					<td height="23" style="font-weight: bold"><div align="right"><label for="kw2">keywords 2</label></div></td>
					<td><input name="kw2" type="text" class="input" size="25"/></td>
				</tr>
				<tr>
					<td height="23" style="font-weight: bold"><div align="right"><label for="kw3">keywords 3</label></div></td>
					<td><input name="kw3" type="text" class="input" size="25"/></td>
				</tr>
				<tr>
					<td height="23" style="font-weight: bold"><div align="right"><label for="linkwk1">Link wiki 1</label></div></td>
					<td><input name="linkwk1" type="text" class="input" size="25"/></td>
				</tr>
				<tr>
					<td height="23" style="font-weight: bold"><div align="right"><label for="linkwk2">Link wiki 2</label></div></td>
					<td><input name="linkwk2" type="text" class="input" size="25"/></td>
				</tr>
				<tr>
					<td height="23" style="font-weight: bold"><div align="right"><label for="linkwk3">Link wiki 3</label></div></td>
					<td><input name="linkwk3" type="text" class="input" size="25"/></td>
				</tr>
				<tr>
					<td height="23" style="font-weight: bold"><div align="right"><label for="articleSection">articleSection(ví dụ: Tin tức)</label></div></td>
					<td><input name="articleSection" type="text" class="input" size="25"/></td>
				</tr>
				<tr>
					<td height="23" style="font-weight: bold"><div align="right"><label for="articleBody">articleBody(nội dung bài viết)</label></div></td>
					<td><input name="articleBody" type="text" class="input" size="25"/></td>
				</tr>
				<tr>
					<td height="23" style="font-weight: bold"><div align="right"><label for="nameOrganization">nameOrganization(chung)</label></div></td>
				</tr>
				<tr>
					<td height="23" style="font-weight: bold"><div align="right"><label for="urlOrganization">urlOrganization(chung)</label></div></td>
				</tr>
				<tr>
					<td height="23" style="font-weight: bold"><div align="right"><label for="namePerson">namePerson(chung)</label></div></td>
				</tr>
				<tr>
					<td height="23" style="font-weight: bold"><div align="right"><label for="urlPerson">urlPerson(chung)</label></div></td>
				</tr>
				<tr>
					<td height="23" style="font-weight: bold"><div align="right"><label for="urlLogo">urlLogo(chung)</label></div></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>