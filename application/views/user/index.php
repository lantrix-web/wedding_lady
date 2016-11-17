
<div id="page" class="page page-wrapper page-men">

	<!-- ======================== HEADER ======================== -->

	<header id="header" class="header page-header hero-men">

		<div class="header-top-overlay">

			<div class="container">

				<div class="top-bar top-bar-men text-center">

					<div class="row">

						<div class="col-lg-12">

							<a class="mob-menu" href="#mobile_menu">
								<div class="hamburger-box">
									<div class="hamburger-inner"></div>
								</div>
							</a>
                            <!-- ======================== LOGIN FORM ======================== -->


                            <div id="log_nav">
                                <ul>
                                    <li id="login_li">
                                        <a href="#" class="btn btn-purple" id="login-trigger">вход</a>

                                        <div id="login-content">
                                            <form action="" method="post" id="login_form">
                                                <fieldset id="inputs">
                                                    Логин <input id="name" class="form-control" type="text" name="auth_login" required>
                                                    Пароль <input id="pass" class="form-control" type="text" name="auth_password" required>
													<div id="error_login" class="error"></div>
                                                </fieldset>
                                                <fieldset id="actions">
                                                    <input type="submit"  id="sbmt" name="auth_submit" value="Войти" class="btn btn-purple">

                                                </fieldset>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>

							<div class="data">

								<span class="ukr-time"><span>UA:</span> 23:45</span>
								<span class="weather">+25<sup>o</sup></span>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

		<div class="main-navigation">

			<div class="container">

				<div class="row">

					<div class="col-xs-12 mobile-logo text-center">

						<img src="/images/logo/logo-men.png" alt="mobile-logo">

					</div>

				</div>

				<div class="row">

					<nav class="nav navbar">

						<ul class="navigation nav-m text-center">

							<li class="nav-item active"><a href="#">Поиск</a></li>
							<li class="nav-item"><a href="#">о нас</a></li>
							<li class="nav-item"><a href="#">о usa</a></li>
							<li class="nav-item"><a href="#">блог</a></li>
							<li class="nav-item"><a href="#">вопрос-ответ</a></li>
							<li class="nav-item"><a href="#">контакты</a></li>

						</ul>

					</nav>

				</div>

			</div>

		</div>

		<div class="register">

			<div class="container">

				<div class="register-wrapper">

					<div class="row">

						<!-- ФОРМА -->

						<div class="col-xs-12 col-lg-5 col-lg-offset-0 col-lg-push-7">

							<div class="register-form-wrapper">

								<div class="row">

									<div class="col-lg-12">

										<div class="reg-form-header">

											Зарегистриуйся прямо сейчас
											и начни строить счастливые отношения

										</div>

									</div>

								</div>

								<!-- REGISTER FORM START -->

								<form action="" method="post" class="reg-form" id="reg">

									<div class="row">

										<div class="col-lg-12">

											<div class="form-group">

												<label for="username">Логин</label>
                                                <input type="text" class="form-control" id="username" name="username" value="">

											</div>

										</div>

									</div>

									<div class="row">

										<div class="col-lg-12">

											<div class="form-group">

												<label for="email">E-mail</label>
												<input type="email" class="form-control" id="email" name="email" value="">

											</div>

										</div>

									</div>

									<div class="row">

										<div class="col-lg-12">

											<div class="form-group">

												<label for="password">Пароль</label>
												<input type="password" class="form-control" id="password" name="password" value="">

											</div>

										</div>

									</div>

									<div class="row">

										<div class="col-lg-12">

											<div class="form-group">

												<label for="state">Город</label>
												<input type="text" class="form-control" id="state" name="city" value="">

											</div>

										</div>

									</div>

									<div class="row">

										<div class="col-lg-12">

											<div class="form-group">

												<div class="row">

													<div class="col-lg-4">

														<label for="">Дата рождения:</label>

													</div>

													<div class="col-lg-8 select-wrap">

														<?php
														$monthOptions = '<option value="0" id="month_option">Month:</option>';
														$dayOptions = '<option value="0" id="day_option">Day:</option>';
														$yearOptions = '<option value="0" id="year_option">Year:</option>';

														for($month=1; $month<=12; $month++)
														{
															$monthName = date("M", mktime(0, 0, 0, $month));
															$monthOptions .= "<option value=\"{$month}\">{$monthName}</option>\n";
														}
														for($day=1; $day<=31; $day++)
														{
															$dayOptions .= "<option value=\"{$day}\">{$day}</option>\n";
														}
														for($year=(date('Y')-18); $year>=1920; $year--)
														{
															$yearOptions .= "<option value=\"{$year}\">{$year}</option>\n";
														}
														?>
														<script type="text/javascript">
															function updateDays()
															{
																//Create variables needed
																var monthSel = document.getElementById('month');
																var daySel   = document.getElementById('day');
																var yearSel  = document.getElementById('year');
																var monthVal = monthSel.value;
																var yearVal  = yearSel.value;

																//Determine the number of days in the month/year
																var daysInMonth = 31;
																if (monthVal==2)
																{
																	daysInMonth = (yearVal%4==0 && (yearVal%100!=0 || yearVal%400==0)) ? 29 : 28;
																}
																else if (monthVal==4 || monthVal==6 || monthVal==9 || monthVal==11)
																{
																	daysInMonth = 30;
																}

																//Add/remove options from days select list as needed
																if(daySel.options.length > daysInMonth)
																{   //Remove excess days, if needed
																	daySel.options.length = daysInMonth;
																}
																while (daySel.options.length != daysInMonth)
																{   //Add additional days, if needed
																	daySel.options[daySel.length] = new Option(daySel.length+1, daySel.length+1, false);
																}

																return;
															}
														</script>

														<select name="day" id="day" class="form-control">
															<?php echo $dayOptions; ?>
														</select>
														<select name="month" id="month" onchange="updateDays();" class="form-control">
															<?php echo $monthOptions; ?>
														</select>
														<select name="year" id="year" onchange="updateDays();" class="form-control">
															<?php echo $yearOptions; ?>
														</select>

													</div>

												</div>

											</div>

										</div>

									</div>

									<div class="row">

										<div class="col-lg-12">

											<div class="reg-form-content">

												Своей регистрацией вы подтверждаете согласие с нашими
												правилами. Вся информация конфиденциальна.

											</div>

										</div>

									</div>

									<div class="row">

										<div class="col-lg-12">

											<div class="form-group">

												<button type="submit" class="btn btn-purple">Бесплатная регистрация</button>

											</div>

										</div>

									</div>

								</form>

								<!-- REGISTER FORM END -->

							</div>

						</div>

						<!-- ТЕКСТ -->

						<div class="col-xs-10 col-xs-offset-1 col-lg-7 col-lg-offset-0 col-lg-pull-5">

							<!-- HEADER CONTENT START -->

							<div class="header-content-wrapper">

								<div class="row">

									<div class="col-lg-12">

										<div class="header-content-title text-white">

											Найди свою любовь<br> на Wife from Ukraine

										</div>

										<div class="row">

											<div class="col-lg-6">

												<ul>
													<li>Поддержка 24/7</li>
													<li>Гарантии от MBRA</li>
													<li>Мужские анкеты на сайте</li>
												</ul>

											</div>

											<div class="col-lg-6">

												<ul>
													<li>Индивидуальный подход к каждой клиентке</li>
													<li>Поддержка свахи как в Украине, так и в USA</li>
												</ul>

											</div>

										</div>

									</div>

								</div>

							</div>

							<!-- HEADER CONTENT END -->

						</div>

					</div>

				</div>

			</div>

		</div>

	</header>

	<!-- ======================== MAIN CONTENT ======================== -->

	<main class="page-content">

		<!-- ======================== SECTION NEWS ======================== -->

		<section id="news" class="section section-news">

			<div class="container">

				<div class="row">

					<div class="col-lg-6">

						<p>Мы не можем гарантировать что через месяц или 2 Вы встретите
							любовь всей своей жизни, но мы на 100% уверяем Вас в том,</p>

					</div>

					<div class="col-lg-6">

						<p>Мы не можем гарантировать что через месяц или 2 Вы встретите
							любовь всей своей жизни, но мы на 100% уверяем Вас в том,</p>

					</div>

				</div>

			</div>

		</section>

		<!-- ======================== SECTION FEATURES ======================== -->

		<section id="features" class="section section-features">

			<div class="container">

				<div class="features-wrapper">

					<div class="row">

						<div class="col-lg-4">

							<div class="features-item">

								<img src="/images/features/f-icon-4.png" alt="features">

								<span>Заполни анкету</span>

								<p>Заполни анкету и начинай знакомства. Данные всех мужчин проверены и подтвержденны</p>

							</div>

						</div>

						<div class="col-lg-4">

							<div class="features-item">

								<img src="/images/features/f-icon-5.png" alt="features">

								<span>Начни знакомиться</span>

								<p>Пиши письма, общайся в онлайн чате, выбирай мужчину</p>

							</div>

						</div>

						<div class="col-lg-4">

							<div class="features-item">

								<img src="/images/features/f-icon-6.png" alt="features">

								<span>замуж за американца</span>

								<p>Полный цикл услуг - от знакомства до переезда</p>

							</div>

						</div>

					</div>

				</div>

			</div>

		</section>

		<!-- ======================== SECTION ABOUT  ======================== -->

		<section id="about" class="section section-about">

			<div class="container">

				<div class="about-wrapper text-center">

					<div class="row">

						<div class="col-lg-6">

							<h3>С заботой о вас, таких нежных, умных,
								самых прекрасных женщинах в мире, мы создали
								агенство Wife from Ukraine!</h3>

							<p>Миссия нашего агенства – помогать одиноким мужчинам и женщинам находить свою половинку. Wife from Ukraine предлагает множество сервисов, которые помогут сделать ваше знакомство: переписку, встречу и, конечно же, свадьбу с дальнейшим переездом максимально комфортным, приятным и безопасным.</p>

							<p>Мы не можем гарантировать, что через месяц или два Вы встретите любовь всей своей жизни, но мы на 100% уверяем Вас в том, что зарегистрировавшись у нас на сайте, вы вразы умножаете свои шансы
								найти Того самого!</p>

						</div>

						<div class="col-lg-6">

							<h3>Наше агенство не размещает анкеты агенств-партнеров</h3>

							<p>Ты можешь быть совершенна уверенна в том, наши мужчины- реальны, и действительно хотят серьезных отношений.</p>

							<h3>Хватит ждать!</h3>

							<p>Мы так часто боимся сделать первый шаг, что бы найти свою любовь, все надеемся, ждем , крутимся вокруг до около, думаем, мечтаем, боимся в конце концов и все эти воображаемые страхи изрядно портят нам жизнь – хватит ждать, пора сделать этот первый шаг!</p>

							<div class="row">

								<div class="col-lg-8 col-lg-offset-2">

									<a class="btn btn-purple" href="#header">Бесплатная регистрация</a>

								</div>

							</div>


						</div>

					</div>

				</div>

			</div>

		</section>

		<!-- ======================== SECTION CONTACTS  ======================== -->

		<section id="contacts" class="section section-contacts">

			<div class="container">

				<div class="row">

					<div class="col-xs-12 col-lg-8 col-lg-offset-0">

						<div class="write-us">

							<!-- WRITE US HEADER -->

							<div class="row">

								<div class="col-lg-8">

									<div class="write-us-header">

										<span>Напишите нам</span>

										<p>Вы можете оставить нам свою историю или отзыв</p>

									</div>

								</div>

							</div>

							<!-- WRITE US FORM -->

							<div class="row">

								<div class="col-lg-12">

									<div class="write-us-form">

										<form action="" method="" id="" class="">

											<div class="row">

												<div class="col-lg-6">

													<div class="form-group">

														<input type="text" class="form-control" id="" name="" value="" placeholder="Ваше имя">

													</div>

												</div>

												<div class="col-lg-6">

													<div class="form-group">

														<input type="email" class="form-control" id="" name="" value="" placeholder="E-mail">

													</div>

												</div>

											</div>

											<div class="row">

												<div class="col-lg-12">

													<div class="form-group">

														<textarea name="" placeholder="Введите ваше сообщение" class="form-control"></textarea>

													</div>

												</div>

											</div>

											<div class="row">

												<div class="col-lg-6">

													<div class="form-group">

														<div class="file-upload">

															<input type="file" class="custom-file-input form-control" id="" name="" value="">

															<div class="input-group-addon">

																<input type="text" class="form-control" readonly="readonly" value="Загрузите ваше изображение">

																<a class="btn btn-purple"><img src="/images/loupe.png" alt=""></a>

															</div>

														</div>

													</div>

												</div>

												<div class="col-lg-6">

													<div class="form-group">

														<button type="submit" class="btn btn-purple">Отправить</button>

													</div>

												</div>

											</div>

										</form>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</section>

		<!-- ======================== SECTION ADVANTEGES  ======================== -->

		<section id="advanteges" class="section section-advanteges">

			<div class="container">

				<div class="advanteges-wrapper">

					<div class="row">

						<div class="col-lg-4">

							<!-- Advantages Icon -->

							<div class="advantages-item">

								<div class="advantage-image">

									<img src="/images/advanteges/shield.png" alt="shield">

								</div>

								<div class="advantage-title">Советы по безопасности на свиданиях</div>

							</div>

						</div>

						<div class="col-lg-4">

							<!-- Advantages Icon -->

							<div class="advantages-item">

								<div class="advantage-image">

									<img src="/images/advanteges/engagement-rings.png" alt="engagement-rings">

								</div>

								<div class="advantage-title">Истории успеха наших пар</div>

							</div>

						</div>

						<div class="col-lg-4">

							<!-- Advantages Icon -->

							<div class="advantages-item">

								<div class="advantage-image">

									<img src="/images/advanteges/tap.png" alt="tap">

								</div>

								<div class="advantage-title">Мифы и предрасудки</div>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-lg-4 col-lg-offset-2">

							<!-- Advantages Icon -->

							<div class="advantages-item">

								<div class="advantage-image">

									<img src="/images/advanteges/circular-question.png" alt="circular-question">

								</div>

								<div class="advantage-title">Предложения и вопросы</div>

							</div>

						</div>

						<div class="col-lg-4">

							<!-- Advantages Icon -->

							<div class="advantages-item">

								<div class="advantage-image">

									<img src="/images/advanteges/information.png" alt="information">

								</div>

								<div class="advantage-title">Свяжись с консультантом</div>

							</div>

						</div>

					</div>

				</div>

				<div class="register-button">

					<div class="row">

						<div class="col-lg-4 col-lg-offset-4">

							<a class="btn btn-purple" href="#header">Бесплатная регистрация</a>

						</div>

					</div>

				</div>

			</div>

		</section>

	</main>


</div>


