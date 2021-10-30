@extends('persiatc.layouts.cart-master', ['title'=> 'فروشگاه اینترنتی'])

@section('content')

<header class="shipping">
    <div class="logo container">
        <a href="#"><img style="width: 90px;" src="/persiatc/banner/PersiaLogo.png"></a>
    </div>
</header>
<main class="main-cart container">
    <ul class="c-checkout-steps">
        <li class="is-active is-completed">
            <div class="c-checkout-steps__item c-checkout-steps__item--summary" data-title="اطلاعات ارسال"></div>
        </li>
        <li class="is-active">
            <div class="c-checkout-steps__item c-checkout-steps__item--delivery" data-title="پرداخت"></div>
        </li>
        <li>
            <div class="c-checkout-steps__item c-checkout-steps__item--payment" data-title="اتمام خرید و ارسال"></div>
        </li>
    </ul>
    <div class="o-page__content">
        <div id="payment-data">
            <div class="o-headline o-headline--checkout"><span>انتخاب شیوه پرداخت </span></div>
            <ul class="c-checkout-paymethod">
                <li>
                    <div class="c-checkout-paymethod__item c-checkout-paymethod__item--cc has-options js-checkout-paymethod__item is-selected is-select-mode">
                        <label class="c-ui-radio c-ui-radio--primary">
                            <input type="radio" name="payment_method" checked> <span class="c-ui-radio__check"></span> </label>
                        <h4 class="c-checkout-paymethod__title"> پرداخت اینترنتی ( آنلاین با تمامی کارت‌های بانکی ) <span>سرعت بیشتر در ارسال و پردازش سفارش</span></h4></div>
                    <div class="c-checkout-paymethod__options">
                        <div class="c-checkout-paymethod__providers">
                            <div class="c-checkout-paymethod__providers-arrow"></div>
                            <label> <span class="c-ui-radio"> <input type="radio" cheked name="bank_id"> <span class="c-ui-radio__check"></span> </span> <span class="c-checkout-paymethod__source-title">بانک سامان</span> <img src="/persiatc/assets/images/samanbank.png" alt=""> </label>
                            <label class="is-selected"> <span class="c-ui-radio"> <input type="radio" cheked name="bank_id"> <span class="c-ui-radio__check"></span> </span> <span class="c-checkout-paymethod__source-title">بانک ملت</span> <img src="/persiatc/assets/images/dpay.png" alt=""> </label>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="o-headline o-headline--checkout"><span>خلاصه سفارش</span></div>
            <div class="c-checkout-order-summary">
                <section class="c-checkout-order-summary__item">
                    <header class="c-checkout-order-summary__header">
                        <div class="c-checkout-order-summary__row">
                            <div class="c-checkout-order-summary__col c-checkout-order-summary__col--post-time"> مرسوله ۱ از ۱ <span>(۱ کالا)</span></div>
                            <div class="c-checkout-order-summary__col c-checkout-order-summary__col--how-to-send"> <span>نحوه ارسال</span> پست پیشتاز (بین 1 تا 4 روز کاری)</div>
                            <div class="c-checkout-order-summary__col c-checkout-order-summary__col--how-to-send"> <span>تاخیر در ارسال</span> 1 روز کاری</div>
                            <div class="c-checkout-order-summary__col c-checkout-order-summary__col--shipping-cost"> <span>هزینه ارسال</span> ۸,۰۰۰ تومان</div>
                        </div>
                    </header>
                    <div class="c-checkout-order-summary__content">
                        <div class="c-product-box"> <img src="/persiatc//images/257887.jpg" alt="">
                            <h4>گوشی موبایل الفون</h4> <span>1 عدد</span></div>
                    </div>
                </section>
            </div>
            <div class="c-checkout-price-options">
                <div class="c-checkout-price-options__form">
                    <section class="c-checkout-price-options__container">
                        <div class="c-checkout-price-options__header"> <span>استفاده از کد تخفیف دیجی‌کالا</span></div>
                        <div class="c-checkout-price-options__content">
                            <p>با ثبت کد تخفیف، مبلغ کد تخفیف از “مبلغ قابل پرداخت” کسر می‌شود.</p>
                            <div class="c-checkout-price-options__row">
                                <input type="text">
                                <button class="btn-primary disabled">ثبت کد تخفیف</button>
                            </div>
                        </div>
                        <div class="c-checkout-price-options__messages">
                            <div class="c-checkout-price-options__message c-checkout-price-options__message--error"> <span>کد تخفیف وارد شده معتبر نمی‌باشد.</span> <span> لطفا دوباره کد تخفیف را وارد نمایید. ممکن است کد تخفیف قبلا استفاده شده یا منقضی شده باشد. </span></div>
                            <div class="c-checkout-price-options__messages">
                                <div class="c-checkout-price-options__message c-checkout-price-options__message--success"> <span class="c-checkout-price-options__message-title">کد تخفیف با موفقیت اعمال گردید.</span> <span class="c-checkout-price-options__message-content"> مبلغ 0 تومان از سفارش شما به‌وسیله کد تخفیف پرداخت خواهد شد. مبلغ سفارش شما از ۸۷,۰۰۰ تومان به ۸۷,۰۰۰ تومان کاهش یافت. </span></div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="c-checkout__to-shipping-sticky">
                <a href="success.html" class="c-checkout__to-shipping-link">پرداخت و ثبت نهایی سفارش</a>
                <div class="c-checkout__to-shipping-price-report">
                    <p>مبلغ قابل پرداخت</p>
                    <div class="c-checkout__to-shipping-price-report--price">۱۹۶,۷۰۰ <span>تومان</span></div>
                </div>
            </div>
        </div>
        <div class="c-checkout__actions">
            <button class="btn-link-spoiler">« بازگشت به شیوه ارسال </button>
        </div>
    </div>
    <aside class="o-page__aside">
        <div class="c-checkout-aside">
            <div class="c-checkout-summary">
                <ul class="c-checkout-summary__summary">
                    <li>
                        <span>قیمت کالاها (۱)</span>
                        <span> ۱۹۸,۲۰۰ تومان </span>
                    </li>
                    <!--incredible-->
                    <li class="c-checkout-summary__discount">
                        <span> تخفیف کالاها </span>
                        <span class="discount-price">۱,۵۰۰ تومان</span>
                    </li>
                    <!--incredible-->
                    <li class="has-devider">
                        <span>جمع</span>
                        <span> ۱۹۶,۷۰۰ تومان </span>
                    </li>
                    <li>
                        <span>هزینه ارسال</span>
                        <span></span>
                    </li>
                    <li>
                        <span style="font-size: 1.1em;padding-right: 10px;">ارسال عادی</span>
                        <span style="font-size: 1.1em;padding-right: 10px;">رایگان</span>
                    </li>
                    <li class="has-devider">
                        <span> مبلغ قابل پرداخت </span>
                        <span> ۱۹۶,۷۰۰ تومان </span>
                    </li>
                    <li class="pd-10">
                        <span> <i class="fa fa-money"></i> امتیاز دیجی کلاب</span>
                        <span> ۲۰ امتیاز </span>
                    </li>
                </ul>
            </div>
            <div class="c-checkout-feature-aside">
                <ul>
                    <li class="c-checkout-feature-aside__item c-checkout-feature-aside__item--guarantee">هفت روز ضمانت تعویض</li>
                    <li class="c-checkout-feature-aside__item c-checkout-feature-aside__item--cash">پرداخت در محل با کارت بانکی</li>
                    <li class="c-checkout-feature-aside__item c-checkout-feature-aside__item--express">تحویل اکسپرس</li>
                </ul>
            </div>
        </div>
    </aside>
</main>
@endsection
