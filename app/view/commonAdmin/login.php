<section id="login-page">
    <div class="container">
        <div class="row text-center">
            <img id="poomat-logo" src="/images/icon/logo2_120.png" alt="">
            <h3>Management Panel</h3>
        </div>
    </div>
    
    <div>
    <?php 
    echo "signUp_res".$signUp_res;
    if($signUp_res!=""){
    	
    	if($data['signUp_res']){
    		echo "관리자 가입신청이 완료 되었습니다.<br/>관리자 승인후 사용이 가능합니다.";
    	}else{
    		echo "가입 신청 실패 다시 시도해 주세요.";
    	}
    }
    
    echo "is_logged".$is_logged;
    if($is_logged!=""){
    	
    	if($data['is_logged']){
    		echo "";
    	}else{
    		echo "로그인 실패- 이미 사용중인 이메일 이거나 관리자가 아직 승인처리를 하지 않은 상태입니다.<br/>승인처리 확인은 관리자에게 문의하세요.";
    	}
    }  
    ?>
    </div>
    <div class="container">
        <div class="row">
            <div id="login-form" class="col-md-6 text-center">
            
                <form action="/admin/login" method="POST">
                    <div class="row">
                        아이디:<input type="text" id="userId" name="email" placeholder="email" autocomplete="off" value='jisung772@gmail.com'>
                    </div>
                    <div class="row">
                        비밀번호:<input type="password" id="password" name="password" placeholder="password" value='12345'>
                    </div>
                    <div class="row">
                        <input id="login-submit" type="submit" name="submit" value="로그인">                        
                    </div>
                </form>
            </div>
            <div id="login-form" class="col-md-6 text-center">
                <form action="/admin/signUp" method="POST">
                    <div class="row">
                        이름:<input type="text" id="userName" name="userName" placeholder="userName" autocomplete="off">
                    </div>
                    <div class="row">
                        아이디:<input type="text" id="userId" name="email" placeholder="email" autocomplete="off">
                    </div>
                    <div class="row">
                        비밀번호:<input type="password" id="password" name="password" placeholder="password">
                    </div>
                    <div class="row">
                        <input id="login-submit" type="submit" name="submit" value="관리자가입신청">                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<style media="screen">
    #login-form input[type="text"], #login-form input[type="password"]{
        margin: 10px;
        padding: 5px;
    }
    #login-submit {
        margin-bottom: 15px;
    }
</style>