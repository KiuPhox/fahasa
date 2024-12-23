<style>
    .account-container {
        background: none;
        display: flex;
        width: 83%;
        margin: 12px auto;
    }

    .block-account {
        background: white;
        border: 1px solid #e6e6e6;
        border-radius: 8px;
        padding: 1rem;
        padding-bottom: 0;
    }

    .block-title {
        padding: 18px 20px;
        font-size: 20px;
        font-weight: 600;
        border-bottom: 2px solid #f6f6f6;
        color: #C92127;
        font-size: 20px;
        font-weight: 700;
        text-transform: uppercase;
    }

    .block-account .block-content li {
        border-bottom: 1px solid #f2f2f2;
        color: #ea7696;
    }

    .block-account .block-content .current a {
        color: #bf9a61;
    }

    .block-account .block-content li a {
        display: block;
        padding: 10px 0px;
        transition: all 300ms ease-in 0s;
    }
</style>

<div class="col-left col-lg-3 col-md-3 col-sm-12 col-xs-12" style="padding: 0;">
    <div class="block-account">
        <div class="block-title">
            Tài khoản
        </div>
        <div class="block-content">
            <ul>
                <?php
                $current_url = $_SERVER['REQUEST_URI'];
                $current_url = str_replace('/fahasa/customer/', '', $current_url);




                $account = $current_url == 'account';
                $account_edit = $current_url == 'account/edit';
                $address = str_contains($current_url, 'address');
                $is_order = str_contains($current_url, 'order');
                $rating = $current_url == 'rating';
                ?>

                <li class="<?php echo $account ? 'current' : ''; ?>"><a href="<?php echo $_ENV['DOMAIN']; ?>/customer/account">Bảng điều khiển tài khoản</a></li>
                <li class="<?php echo $account_edit ? 'current' : ''; ?>"><a href="<?php echo $_ENV['DOMAIN']; ?>/customer/account/edit">Thông tin tài khoản</a></li>
                <li class="<?php echo $address ? 'current' : ''; ?>"><a href="<?php echo $_ENV['DOMAIN']; ?>/customer/address">Sổ địa chỉ</a></li>
                <li class="<?php echo $is_order ? 'current' : ''; ?>"><a href="<?php echo $_ENV['DOMAIN']; ?>/customer/order">Đơn hàng của tôi</a></li>
                <li class="<?php echo $rating ? 'current' : ''; ?>"><a href="<?php echo $_ENV['DOMAIN']; ?>/customer/rating">Nhận xét của tôi</a></li>
            </ul>
        </div>
    </div>
</div>