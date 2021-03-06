<?php include ROOT . '/views/layouts/header.php'; ?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4 padding-right">
                    <?php if ($isMessageSent): ?>
                        <p>Сообщение отправлено. Мы ответим Вам на указанный email.</p>
                    <?php else: ?>
                        <?php if (isset($errors) && is_array($errors)): ?>
                            <ul>
                                <?php foreach ($errors as $error): ?>
                                    <li> - <?php echo $error; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                        <div class="signup-form">
                            <h2>Обратная связь</h2>
                            <form action="#" method="post">
                                <p>Ваша почта</p>
                                <input type="email" name="email" placeholder="E-mail" value="<?php echo $userEmail; ?>"/>
                                <p>Ваша сообщение</p>
                                <input type="text" name="text" placeholder="Сообщение" value="<?php echo $userText; ?>"/>
                                <input type="submit" name="submit" class="btn btn-default" value="Отправить"/>
                            </form>
                        </div>
                    <?php endif; ?>

                    <br/>
                    <br/>
                </div>
            </div>
        </div>
    </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>