
    <?php include('header.php'); ?>
    <?php
	// お問い合わせフォーム画面遷移フラグ処理
	// 変数の初期化
	// $page_flag 0:初期値 1:確認画面 2:送信後画面 3: エラー画面
	$page_flag = 0;

	if( !empty($_POST['confirm']) ) {
		if(strlen($_POST['name']) == 0 || strlen($_POST['email']) == 0 || strlen($_POST['inquiry']) == 0){
			$page_flag = 3;
		}else{
			$page_flag = 1;
		}
	
	// メール送信処理
	}elseif( !empty($_POST['send']) ) {
		$page_flag = 2;
		// 変数とタイムゾーンを初期化
		$auto_reply_subject = null;
		$auto_reply_text = null;
		$admin_reply_subject = null;
		$admin_reply_text = null;
		date_default_timezone_set('Asia/Tokyo');

		// ヘッダー情報を設定
		$header = "MIME-Version: 1.0\n";
		$header .= "From: techmi <noreply@lsm.co.jp>\n";
		$header .= "Reply-To:" . $_POST['name'] ." <" . $_POST['email'] . ">\n";

		// 件名を設定
		$auto_reply_subject = 'お問い合わせありがとうございます。';

		// 本文を設定
		$auto_reply_text = "この度は、お問い合わせ頂き誠にありがとうございます。
							下記の内容でお問い合わせを受け付けました。\n\n";
		$auto_reply_text .= "お問い合わせ日時：" . date("Y-m-d H:i") . "\n";
		$auto_reply_text .= "氏名：" . $_POST['name'] . "\n";
		$auto_reply_text .= "メールアドレス：" . $_POST['email'] . "\n\n";
		$auto_reply_text .= "お問い合わせ内容：" . $_POST['inquiry'] . "\n\n";
		$auto_reply_text .= "lsm.co.jp";

		// メール送信
		mb_send_mail( $_POST['email'], $auto_reply_subject, $auto_reply_text, $header);

		// 運営側へ送るメールの件名
		$admin_reply_subject = "お問い合わせを受け付けました";
		
		// 本文を設定
		$admin_reply_text = "下記の内容でお問い合わせがありました。\n\n";
		$admin_reply_text .= "お問い合わせ日時：" . date("Y-m-d H:i") . "\n";
		$admin_reply_text .= "氏名：" . $_POST['name'] . "\n";
		$admin_reply_text .= "メールアドレス：" . $_POST['email'] . "\n\n";
		$auto_reply_text .= "お問い合わせ内容：" . $_POST['inquiry'] . "\n\n";

		// 運営側へメール送信
		mb_send_mail( 't3chmi@gmail.com', $admin_reply_subject, $admin_reply_text, $header);
	}
	?>


	<!-- 確認画面 -->
	<?php if($page_flag === 1): ?>
	<form style="margin-bottom:10%;" method="post" id="iqnuiry_form">
		<div class="item">
			<label class="label">お名前</label>
			<p><?php echo $_POST['name']; ?></p>
		</div>
		
		<div class="item">
			<label class="label">メールアドレス</label>
			<p><?php echo $_POST['email']; ?></p>
		</div>
		
		<div class="item">
			<label class="label">お問い合わせ内容</label>
			<p><?php echo $_POST['inquiry']; ?></p>
		</div>
		
		<div class="btn-area">
			<input type="submit" value="送信する" name="send">
		</div>
		
		<div class="btn-area">
			<input type="submit" value="戻る" name="back" >
		</div>

		<input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
		<input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
		<input type="hidden" name="inquiry" value="<?php echo $_POST['inquiry']; ?>">
	</form>
		
	 <!-- 送信後画面 -->
	<?php elseif($page_flag === 2): ?>
		<p>送信が完了しました。</p>
		
	 <!-- エラー画面 -->
	<?php elseif($page_flag === 3): ?>
		<form style="margin-bottom:10%;" method="post" id="iqnuiry_form">
			<p>空欄の項目があります。</p>
			<div class="item">
				<label class="label">お名前</label>
				<input class="inputs" type="text" name="name" value="<?php echo $_POST['name']; ?>">
			</div>
			
			<div class="item">
				<label class="label">メールアドレス</label>
				<input class="inputs" type="email" name="email" value="<?php echo $_POST['email']; ?>">
			</div>
			
			<div class="item">
				<label class="label">お問い合わせ内容</label>
				<textarea class="inputs" name="inquiry">
					<?php echo $_POST['inquiry']; ?>
				</textarea>
			</div>
			<div class="btn-area">
				<input type="submit" value="送信する" name="confirm">
			</div>
		</form>
	<!-- 初期入力画面-->
	<?php else: ?>
		<?php //echo get_page_by_path(); ?>
		<form style="margin-bottom:10%;" method="post" id="iqnuiry_form">
			<div class="item">
				<label class="label">お名前</label>
				<input class="inputs" type="text" name="name" required>
			</div>
			
			<div class="item">
				<label class="label">メールアドレス</label>
				<input class="inputs" type="email" name="email" required>
			</div>
			
			<div class="item">
				<label class="label">お問い合わせ内容</label>
				<textarea class="inputs" name="inquiry" required></textarea>
			</div>
						
			<div class="btn-area">
				<input type="submit" value="確認する" name="confirm">
			</div>
		</form>
	<?php endif; ?>

</body>
</html>