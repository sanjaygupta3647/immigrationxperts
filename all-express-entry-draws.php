<?php
// Get the current URL
$current_url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

// Parse the URL to get its components
$parsed_url = parse_url($current_url);

// Construct the canonical URL without query parameters or fragments
$canonical_url = $parsed_url['scheme'] . '://' . $parsed_url['host'] . $parsed_url['path'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
	<!-- Canonical tag -->
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> All Express Entry Draws</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="/assets/images/favicons/site.webmanifest" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="/assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="/assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="/assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="/assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="/assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="/assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="/assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="/assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="/assets/vendors/insur-icons/style.css">
    <link rel="stylesheet" href="/assets/vendors/insur-two-icon/style.css">
    <link rel="stylesheet" href="/assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="/assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="/assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="/assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="/assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="/assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="/assets/vendors/timepicker/timePicker.css" />
    <link rel="stylesheet" href="/assets/vendors/ion.rangeSlider/css/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="/assets/vendors/BuenosAires/stylesheet.css" />

    <!-- template styles -->
    <link rel="stylesheet" id="langLtr" href="/assets/css/insur.css" />
    <link rel="stylesheet" href="/assets/css/insur-responsive.css" />

 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
     
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PR37ZR3');</script>
<!-- End Google Tag Manager -->


</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PR37ZR3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <?php include 'header.php';?>

    <div class="page-wrapper">

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(/assets/images/backgrounds/Express-Entry-Draws-List.webp)">
            </div>
            <div class="page-header-shape-1"><img src="/assets/images/shapes/page-header-shape-1.png" alt=""></div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><span>/</span></li>
                        <li>Study Abroad</li>
                    </ul>
                    <h2></h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--News Details Start-->
        <section class="news-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="news-details__left">
                            <h1 class="section-title__title">Express Entry Draws List</h1>
                            <div class="faq-one__single">
                                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4><span>!</span> Express-Entry-Draws-2023</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Draw No</th>
                                                            <th scope="col">Draw Date</th>
                                                            <th scope="col">CRS Cut Off</th>
                                                            <th scope="col">ITAs Issued</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>242</td>
                                                            <td>March 1, 2023</td>
                                                            <td>748 (*Provincial Nominee only)</td>
                                                            <td>667</td>
                                                        </tr>
                                                        <tr>
                                                            <td>241</td>
                                                            <td>February 15, 2023</td>
                                                            <td>791 (*Provincial Nominee only)</td>
                                                            <td>699</td>
                                                        </tr>
                                                        <tr>
                                                            <td>240</td>
                                                            <td>February 2, 2023</td>
                                                            <td>489 (*Federal Skilled Workers only)</td>
                                                            <td>3300</td>
                                                        </tr>
                                                        <tr>
                                                            <td>239</td>
                                                            <td>February 1, 2023</td>
                                                            <td>733 (*Provincial Nominee only)</td>
                                                            <td>893</td>
                                                        </tr>
                                                        <tr>
                                                            <td>238</td>
                                                            <td>January 18, 2023</td>
                                                            <td>490 (*All-Program draw)</td>
                                                            <td>5500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>237</td>
                                                            <td>January 11, 2023</td>
                                                            <td>507 (*All-Program draw)</td>
                                                            <td>5500</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion active">
                                        <div class="accrodion-title">
                                            <h4><span>!</span> Express-Entry-Draws-2022</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Draw No</th>
                                                            <th scope="col">Draw Date</th>
                                                            <th scope="col">CRS Cut Off</th>
                                                            <th scope="col">ITAs Issued</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>236</td>
                                                            <td>November 23, 2022</td>
                                                            <td>491 (*All-Program draw)</td>
                                                            <td>4750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>235</td>
                                                            <td>November 9, 2022</td>
                                                            <td>494 (*All-Program draw)</td>
                                                            <td>4750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>234</td>
                                                            <td>October 26, 2022</td>
                                                            <td>496 (*All-Program draw)</td>
                                                            <td>4750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>233</td>
                                                            <td>October 13, 2022</td>
                                                            <td>500 (*All-Program draw)</td>
                                                            <td>4250</td>
                                                        </tr>
                                                        <tr>
                                                            <td>232</td>
                                                            <td>September 28, 2022</td>
                                                            <td>504 (*All-Program draw)</td>
                                                            <td>3750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>231</td>
                                                            <td>September 14, 2022</td>
                                                            <td>510 (*All-Program draw)</td>
                                                            <td>3250</td>
                                                        </tr>
                                                        <tr>
                                                            <td>230</td>
                                                            <td>August 31, 2022</td>
                                                            <td>516 (*All-Program draw)</td>
                                                            <td>2750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>229</td>
                                                            <td>August 17, 2022</td>
                                                            <td>525 (*All-Program draw)</td>
                                                            <td>2250</td>
                                                        </tr>
                                                        <tr>
                                                            <td>228</td>
                                                            <td>August 3, 2022</td>
                                                            <td>533 (*All-Program draw)</td>
                                                            <td>2000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>227</td>
                                                            <td>July 20, 2022</td>
                                                            <td>542 (*All-Program draw)</td>
                                                            <td>1750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>226</td>
                                                            <td>July 6, 2022</td>
                                                            <td>557 (*All-Program draw)</td>
                                                            <td>1500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>225</td>
                                                            <td>June 22, 2022</td>
                                                            <td>752 (*Provincial Nominee only)</td>
                                                            <td>636</td>
                                                        </tr>
                                                        <tr>
                                                            <td>224</td>
                                                            <td>June 8, 2022</td>
                                                            <td>796 (*Provincial Nominee only)</td>
                                                            <td>932</td>
                                                        </tr>
                                                        <tr>
                                                            <td>223</td>
                                                            <td>May 25, 2022</td>
                                                            <td>741 (*Provincial Nominee only)</td>
                                                            <td>589</td>
                                                        </tr>
                                                        <tr>
                                                            <td>222</td>
                                                            <td>May 11, 2022</td>
                                                            <td>753 (*Provincial Nominee only)</td>
                                                            <td>545</td>
                                                        </tr>
                                                        <tr>
                                                            <td>221</td>
                                                            <td>April 27, 2022</td>
                                                            <td>772 (*Provincial Nominee only)</td>
                                                            <td>829</td>
                                                        </tr>
                                                        <tr>
                                                            <td>220</td>
                                                            <td>April 13, 2022</td>
                                                            <td>782 (*Provincial Nominee only)</td>
                                                            <td>787</td>
                                                        </tr>
                                                        <tr>
                                                            <td>219</td>
                                                            <td>March 30, 2022</td>
                                                            <td>785 (*Provincial Nominee only)</td>
                                                            <td>919</td>
                                                        </tr>
                                                        <tr>
                                                            <td>218</td>
                                                            <td>March 16, 2022</td>
                                                            <td>754 (*Provincial Nominee only)</td>
                                                            <td>924</td>
                                                        </tr>
                                                        <tr>
                                                            <td>217</td>
                                                            <td>March 2, 2022</td>
                                                            <td>761 (*Provincial Nominee only)</td>
                                                            <td>1,047</td>
                                                        </tr>
                                                        <tr>
                                                            <td>216</td>
                                                            <td>February 16, 2022</td>
                                                            <td>710 (*Provincial Nominee only)</td>
                                                            <td>1082</td>
                                                        </tr>
                                                        <tr>
                                                            <td>215</td>
                                                            <td>February 2 ,2022</td>
                                                            <td>674 (*Provincial Nominee only)</td>
                                                            <td>1070</td>
                                                        </tr>
                                                        <tr>
                                                            <td>214</td>
                                                            <td>January 19, 2022</td>
                                                            <td>745 (*Provincial Nominee only)</td>
                                                            <td>1036</td>
                                                        </tr>
                                                        <tr>
                                                            <td>213</td>
                                                            <td>January 5, 2022</td>
                                                            <td>808 (*Provincial Nominee only)</td>
                                                            <td>392</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion last-chiled">
                                        <div class="accrodion-title">
                                            <h4><span>!</span> Express-Entry-Draws-2021</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Draw No</th>
                                                            <th scope="col">Draw Date</th>
                                                            <th scope="col">CRS Cut Off</th>
                                                            <th scope="col">ITAs Issued</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>212</td>
                                                            <td>December 22, 2021</td>
                                                            <td>720 (*Provincial Nominee only)</td>
                                                            <td>746</td>
                                                        </tr>
                                                        <tr>
                                                            <td>211</td>
                                                            <td>December 10, 2021</td>
                                                            <td>698 (*Provincial Nominee only)</td>
                                                            <td>1032</td>
                                                        </tr>
                                                        <tr>
                                                            <td>210</td>
                                                            <td>November 24, 2021</td>
                                                            <td>737 (*Provincial Nominee only)</td>
                                                            <td>613</td>
                                                        </tr>
                                                        <tr>
                                                            <td>209</td>
                                                            <td>November 10, 2021</td>
                                                            <td>685 (*Provincial Nominee only)</td>
                                                            <td>775</td>
                                                        </tr>
                                                        <tr>
                                                            <td>208</td>
                                                            <td>October 27, 2021</td>
                                                            <td>744 (*Provincial nominees only)</td>
                                                            <td>888</td>
                                                        </tr>
                                                        <tr>
                                                            <td>207</td>
                                                            <td>October 13, 2021</td>
                                                            <td>720 (*Provincial Nominee only)</td>
                                                            <td>681</td>
                                                        </tr>
                                                        <tr>
                                                            <td>206</td>
                                                            <td>September 29, 2021</td>
                                                            <td>742 (*Provincial nominees only)</td>
                                                            <td>761</td>
                                                        </tr>
                                                        <tr>
                                                            <td>205</td>
                                                            <td>September 15, 2021</td>
                                                            <td>732 (*Provincial Nominee only)</td>
                                                            <td>521</td>
                                                        </tr>
                                                        <tr>
                                                            <td>204</td>
                                                            <td>September 14, 2021</td>
                                                            <td>462 (*Canadian Experience Class only)</td>
                                                            <td>2,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>203</td>
                                                            <td>September 1, 2021</td>
                                                            <td>764 (*Provincial nominees only)</td>
                                                            <td>635</td>
                                                        </tr>
                                                        <tr>
                                                            <td>202</td>
                                                            <td>August 19, 2021</td>
                                                            <td>403 (*Canadian Experience Class)</td>
                                                            <td>3,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>201</td>
                                                            <td>August 18, 2021</td>
                                                            <td>751 (*Provincial nominees only)</td>
                                                            <td>463</td>
                                                        </tr>
                                                        <tr>
                                                            <td>200</td>
                                                            <td>August 5, 2021</td>
                                                            <td>404 (*Canadian Experience Class)</td>
                                                            <td>3,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>199</td>
                                                            <td>August 4, 2021</td>
                                                            <td>760 (*Provincial nominees only)</td>
                                                            <td>512</td>
                                                        </tr>
                                                        <tr>
                                                            <td>198</td>
                                                            <td>July 22, 2021</td>
                                                            <td>357 (*Canadian Experience Class)</td>
                                                            <td>4500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>197</td>
                                                            <td>July 21, 2021</td>
                                                            <td>734 (*Provincial nominees only)</td>
                                                            <td>462</td>
                                                        </tr>
                                                        <tr>
                                                            <td>196</td>
                                                            <td>July 08,2021</td>
                                                            <td>369 (*Canadian Experience Class)</td>
                                                            <td>4500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>195</td>
                                                            <td>July 07,2021</td>
                                                            <td>760 (*Provincial nominees only)</td>
                                                            <td>627</td>
                                                        </tr>
                                                        <tr>
                                                            <td>194</td>
                                                            <td>June 24,2021</td>
                                                            <td>357 (*Canadian Experience Class)</td>
                                                            <td>6000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>193</td>
                                                            <td>June 23,2021</td>
                                                            <td>742 (*Provincial nominees only)</td>
                                                            <td>1002</td>
                                                        </tr>
                                                        <tr>
                                                            <td>192</td>
                                                            <td>June 10,2021</td>
                                                            <td>368 (*Canadian Experience Class)</td>
                                                            <td>6000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>191</td>
                                                            <td>June 9,&nbsp; 2021</td>
                                                            <td>711 (*Provincial nominees only)</td>
                                                            <td>940</td>
                                                        </tr>
                                                        <tr>
                                                            <td>190</td>
                                                            <td>May 31, 2021</td>
                                                            <td>380 (*Canadian Experience Class)</td>
                                                            <td>5956</td>
                                                        </tr>
                                                        <tr>
                                                            <td>189</td>
                                                            <td>May 26, 2021</td>
                                                            <td>713 (*Provincial nominees only)</td>
                                                            <td>500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>188</td>
                                                            <td>May 20, 2021</td>
                                                            <td>397 (*Canadian Experience Class)</td>
                                                            <td>1842</td>
                                                        </tr>
                                                        <tr>
                                                            <td>187</td>
                                                            <td>May 13, 2021</td>
                                                            <td>401 (*Canadian Experience Class)</td>
                                                            <td>4,147</td>
                                                        </tr>
                                                        <tr>
                                                            <td>186</td>
                                                            <td>May 12, 2021</td>
                                                            <td>752 (*Provincial nominees only)</td>
                                                            <td>557</td>
                                                        </tr>
                                                        <tr>
                                                            <td>185</td>
                                                            <td>April 29, 2021</td>
                                                            <td>400 (*Canadian Experience Class only)</td>
                                                            <td>6000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>184</td>
                                                            <td>April 28, 2021</td>
                                                            <td>717 (*Provincial nominees only)</td>
                                                            <td>381</td>
                                                        </tr>
                                                        <tr>
                                                            <td>183</td>
                                                            <td>16-April-2021</td>
                                                            <td>417 (*Canadian Experience Class)</td>
                                                            <td>6000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>182</td>
                                                            <td>14-April-2021</td>
                                                            <td>753 (*Provincial Nominee Program)</td>
                                                            <td>266</td>
                                                        </tr>
                                                        <tr>
                                                            <td>181</td>
                                                            <td>1- April- 2021</td>
                                                            <td>432 (*Canadian Experience Class)</td>
                                                            <td>5000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>180</td>
                                                            <td>31- March-2021</td>
                                                            <td>778 (*Provincial Nominee Class)</td>
                                                            <td>284</td>
                                                        </tr>
                                                        <tr>
                                                            <td>179</td>
                                                            <td>18- March-2021</td>
                                                            <td>449 (Canadian Experience Class)</td>
                                                            <td>5000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>178</td>
                                                            <td>17- March-2021</td>
                                                            <td>682 (*Provincial Nominee Class)</td>
                                                            <td>183</td>
                                                        </tr>
                                                        <tr>
                                                            <td>177</td>
                                                            <td>8- March-2021</td>
                                                            <td>739 (*Provincial Nominee Class)</td>
                                                            <td>671</td>
                                                        </tr>
                                                        <tr>
                                                            <td>176</td>
                                                            <td>13-February-2021</td>
                                                            <td>75 (Canadian Experience Class)</td>
                                                            <td>27,332</td>
                                                        </tr>
                                                        <tr>
                                                            <td>175</td>
                                                            <td>10-February-2021</td>
                                                            <td>720 (*Provincial Nominee Class)</td>
                                                            <td>654</td>
                                                        </tr>
                                                        <tr>
                                                            <td>174</td>
                                                            <td>21-January-2021</td>
                                                            <td>454 (Canadian Experience Class)</td>
                                                            <td>4,626</td>
                                                        </tr>
                                                        <tr>
                                                            <td>173</td>
                                                            <td>20-January-2021</td>
                                                            <td>741 (*Provincial Nominee Class)</td>
                                                            <td>374</td>
                                                        </tr>
                                                        <tr>
                                                            <td>172</td>
                                                            <td>7-January-2021</td>
                                                            <td>461 (*Canadian Experience Class)</td>
                                                            <td>4750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>171</td>
                                                            <td>6-January-2021</td>
                                                            <td>813 (*Provincial Nominee Class)</td>
                                                            <td>250</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion last-chiled">
                                        <div class="accrodion-title">
                                            <h4><span>!</span> Express-Entry-Draws-2020</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Draw No</th>
                                                            <th scope="col">Draw Date</th>
                                                            <th scope="col">CRS Cut Off</th>
                                                            <th scope="col">ITAs Issued</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>170</td>
                                                            <td>23-December-2020</td>
                                                            <td>468 (*All-program draw)</td>
                                                            <td>5,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>169</td>
                                                            <td>9-December-2020</td>
                                                            <td>469 (*All-program draw)</td>
                                                            <td>5,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>168</td>
                                                            <td>25-November-2020</td>
                                                            <td>469 (*All-program draw)</td>
                                                            <td>5,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>167</td>
                                                            <td>18-November-2020</td>
                                                            <td>472 (*All-program draw)</td>
                                                            <td>5,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>166</td>
                                                            <td>5-November-2020</td>
                                                            <td>478 (*All-program draw)</td>
                                                            <td>4,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>165</td>
                                                            <td>14-October-2020</td>
                                                            <td>471 (*All-program draw)</td>
                                                            <td>4,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>164</td>
                                                            <td>30-September-2020</td>
                                                            <td>471 (*All-program draw)</td>
                                                            <td>4,200</td>
                                                        </tr>
                                                        <tr>
                                                            <td>163</td>
                                                            <td>16-September-2020</td>
                                                            <td>472 (*All-program draw)</td>
                                                            <td>4,200</td>
                                                        </tr>
                                                        <tr>
                                                            <td>162</td>
                                                            <td>2-September-2020</td>
                                                            <td>475 (*All-program draw)</td>
                                                            <td>4,200</td>
                                                        </tr>
                                                        <tr>
                                                            <td>161</td>
                                                            <td>20-August-2020</td>
                                                            <td>454 (*Canadian Experience Class)</td>
                                                            <td>3,300</td>
                                                        </tr>
                                                        <tr>
                                                            <td>160</td>
                                                            <td>19-August-2020</td>
                                                            <td>771 (*Provincial Nominee Class)</td>
                                                            <td>600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>159</td>
                                                            <td>6-August-2020</td>
                                                            <td>415 (*Federal Skilled Trades)</td>
                                                            <td>250</td>
                                                        </tr>
                                                        <tr>
                                                            <td>158</td>
                                                            <td>5-August-2020</td>
                                                            <td>476 (*all-program draw)</td>
                                                            <td>3,900</td>
                                                        </tr>
                                                        <tr>
                                                            <td>157</td>
                                                            <td>23-July-2020</td>
                                                            <td>445 (*Canadian Experience Class only)</td>
                                                            <td>3,343</td>
                                                        </tr>
                                                        <tr>
                                                            <td>156</td>
                                                            <td>22-July-2020</td>
                                                            <td>687 (*Provincial nominees only)</td>
                                                            <td>557</td>
                                                        </tr>
                                                        <tr>
                                                            <td>155</td>
                                                            <td>8-July-2020</td>
                                                            <td>478</td>
                                                            <td>3,900</td>
                                                        </tr>
                                                        <tr>
                                                            <td>154</td>
                                                            <td>25-June-2020</td>
                                                            <td>431 *Canadian Experience Class only</td>
                                                            <td>3,508</td>
                                                        </tr>
                                                        <tr>
                                                            <td>153</td>
                                                            <td>24-June-2020</td>
                                                            <td>696 *Provincial nominees only</td>
                                                            <td>392</td>
                                                        </tr>
                                                        <tr>
                                                            <td>152</td>
                                                            <td>11-June-2020</td>
                                                            <td>437 *Canadian Experience Class only</td>
                                                            <td>3,559</td>
                                                        </tr>
                                                        <tr>
                                                            <td>151</td>
                                                            <td>10-June-2020</td>
                                                            <td>743 *Provincial nominees only</td>
                                                            <td>341</td>
                                                        </tr>
                                                        <tr>
                                                            <td>150</td>
                                                            <td>28-May-2020</td>
                                                            <td>440 *Canadian Experience Class only</td>
                                                            <td>3,515</td>
                                                        </tr>
                                                        <tr>
                                                            <td>149</td>
                                                            <td>27-May-2020</td>
                                                            <td>757 *Provincial nominees only</td>
                                                            <td>385</td>
                                                        </tr>
                                                        <tr>
                                                            <td>148</td>
                                                            <td>15-May-2020</td>
                                                            <td>447 *Canadian Experience Class only</td>
                                                            <td>3,371</td>
                                                        </tr>
                                                        <tr>
                                                            <td>147</td>
                                                            <td>14-May-020</td>
                                                            <td>718 *Provincial nominees only</td>
                                                            <td>529</td>
                                                        </tr>
                                                        <tr>
                                                            <td>146</td>
                                                            <td>1-May-2020</td>
                                                            <td>452 *Canadian Experience Class only</td>
                                                            <td>3,311</td>
                                                        </tr>
                                                        <tr>
                                                            <td>145</td>
                                                            <td>29-April-2020</td>
                                                            <td>692 *Provincial Nominees only</td>
                                                            <td>589</td>
                                                        </tr>
                                                        <tr>
                                                            <td>144</td>
                                                            <td>16-April-2020</td>
                                                            <td>808 *Canadian Experience Class (CEC)only</td>
                                                            <td>3,782</td>
                                                        </tr>
                                                        <tr>
                                                            <td>143</td>
                                                            <td>15-April-2020</td>
                                                            <td>808 *Provincial Nominees only</td>
                                                            <td>118</td>
                                                        </tr>
                                                        <tr>
                                                            <td>142</td>
                                                            <td>9-April-2020</td>
                                                            <td>464 *Canadian Experience Class only</td>
                                                            <td>3,294</td>
                                                        </tr>
                                                        <tr>
                                                            <td>141</td>
                                                            <td>9-April-2020</td>
                                                            <td>698 *Provincial Nominees only</td>
                                                            <td>606</td>
                                                        </tr>
                                                        <tr>
                                                            <td>138</td>
                                                            <td>4-March-2020</td>
                                                            <td>471</td>
                                                            <td>3,900</td>
                                                        </tr>
                                                        <tr>
                                                            <td>137</td>
                                                            <td>19-February-2020</td>
                                                            <td>470</td>
                                                            <td>4,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>136</td>
                                                            <td>5-February-2020</td>
                                                            <td>472</td>
                                                            <td>3,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>135</td>
                                                            <td>22-January-2020</td>
                                                            <td>471</td>
                                                            <td>3,400</td>
                                                        </tr>
                                                        <tr>
                                                            <td>134</td>
                                                            <td>8-January-2020</td>
                                                            <td>473</td>
                                                            <td>3,400</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion last-chiled">
                                        <div class="accrodion-title">
                                            <h4><span>!</span> Express-Entry-Draws-2019</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Draw No</th>
                                                            <th scope="col">Draw Date</th>
                                                            <th scope="col">CRS Cut Off</th>
                                                            <th scope="col">ITAs Issued</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>133</td>
                                                            <td>19-December-2019</td>
                                                            <td>463</td>
                                                            <td>3200</td>
                                                        </tr>
                                                        <tr>
                                                            <td>132</td>
                                                            <td>11-December-2019</td>
                                                            <td>472</td>
                                                            <td>3200</td>
                                                        </tr>
                                                        <tr>
                                                            <td>131</td>
                                                            <td>27-November-2019</td>
                                                            <td>471</td>
                                                            <td>3600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>130</td>
                                                            <td>13-November-2019</td>
                                                            <td>472</td>
                                                            <td>3600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>129</td>
                                                            <td>30-October-2019</td>
                                                            <td>475</td>
                                                            <td>3900</td>
                                                        </tr>
                                                        <tr>
                                                            <td>128</td>
                                                            <td>16-October-2019</td>
                                                            <td>357 (*Federal Skilled Trades candidates only)</td>
                                                            <td>500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>127</td>
                                                            <td>2-October-2019</td>
                                                            <td>464</td>
                                                            <td>3900</td>
                                                        </tr>
                                                        <tr>
                                                            <td>126</td>
                                                            <td>18-September-2019</td>
                                                            <td>462</td>
                                                            <td>3600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>125</td>
                                                            <td>4-September-2019</td>
                                                            <td>463</td>
                                                            <td>3600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>124</td>
                                                            <td>20-August-2019</td>
                                                            <td>457</td>
                                                            <td>3600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>123</td>
                                                            <td>12-August-2019</td>
                                                            <td>466</td>
                                                            <td>3600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>122</td>
                                                            <td>24-July-2019</td>
                                                            <td>459</td>
                                                            <td>3600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>121</td>
                                                            <td>10-July-2019</td>
                                                            <td>460</td>
                                                            <td>3600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>120</td>
                                                            <td>26-June-2019</td>
                                                            <td>462</td>
                                                            <td>3350</td>
                                                        </tr>
                                                        <tr>
                                                            <td>119</td>
                                                            <td>12-June-2019</td>
                                                            <td>465</td>
                                                            <td>3350</td>
                                                        </tr>
                                                        <tr>
                                                            <td>118</td>
                                                            <td>29-May- 2019</td>
                                                            <td>470</td>
                                                            <td>3350</td>
                                                        </tr>
                                                        <tr>
                                                            <td>117</td>
                                                            <td>15-May- 2019</td>
                                                            <td>332(*Federal Skilled Trades candidates only)</td>
                                                            <td>500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>116</td>
                                                            <td>1-May- 2019</td>
                                                            <td>450</td>
                                                            <td>3350</td>
                                                        </tr>
                                                        <tr>
                                                            <td>115</td>
                                                            <td>17-April- 2019</td>
                                                            <td>451</td>
                                                            <td>3350</td>
                                                        </tr>
                                                        <tr>
                                                            <td>114</td>
                                                            <td>3-April- 2019</td>
                                                            <td>451</td>
                                                            <td>3350</td>
                                                        </tr>
                                                        <tr>
                                                            <td>113</td>
                                                            <td>20-March- 2019</td>
                                                            <td>452</td>
                                                            <td>3350</td>
                                                        </tr>
                                                        <tr>
                                                            <td>112</td>
                                                            <td>6-March- 2019</td>
                                                            <td>454</td>
                                                            <td>3350</td>
                                                        </tr>
                                                        <tr>
                                                            <td>111</td>
                                                            <td>20-Feb- 2019</td>
                                                            <td>457</td>
                                                            <td>3350</td>
                                                        </tr>
                                                        <tr>
                                                            <td>110</td>
                                                            <td>30-Jan- 2019</td>
                                                            <td>438</td>
                                                            <td>3350</td>
                                                        </tr>
                                                        <tr>
                                                            <td>109</td>
                                                            <td>23-Jan- 2019</td>
                                                            <td>443</td>
                                                            <td>3900</td>
                                                        </tr>
                                                        <tr>
                                                            <td>108</td>
                                                            <td>10-Jan- 2019</td>
                                                            <td>441</td>
                                                            <td>3,500</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion last-chiled">
                                        <div class="accrodion-title">
                                            <h4><span>!</span> Express-Entry-Draws-2018</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Draw No</th>
                                                            <th scope="col">Draw Date</th>
                                                            <th scope="col">CRS Cut Off</th>
                                                            <th scope="col">ITAs Issued</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>107</td>
                                                            <td>19 December 2018</td>
                                                            <td>439</td>
                                                            <td>3900</td>
                                                        </tr>
                                                        <tr>
                                                            <td>106</td>
                                                            <td>12 December 2018</td>
                                                            <td>445</td>
                                                            <td>3900</td>
                                                        </tr>
                                                        <tr>
                                                            <td>105</td>
                                                            <td>28 November 2018</td>
                                                            <td>445</td>
                                                            <td>3900</td>
                                                        </tr>
                                                        <tr>
                                                            <td>104</td>
                                                            <td>15 November 2018</td>
                                                            <td>449</td>
                                                            <td>3900</td>
                                                        </tr>
                                                        <tr>
                                                            <td>103</td>
                                                            <td>29 October 2018</td>
                                                            <td>442</td>
                                                            <td>3900</td>
                                                        </tr>
                                                        <tr>
                                                            <td>102</td>
                                                            <td>15 October 2018</td>
                                                            <td>440</td>
                                                            <td>3900</td>
                                                        </tr>
                                                        <tr>
                                                            <td>101</td>
                                                            <td>3 October&nbsp; 2018</td>
                                                            <td>445</td>
                                                            <td>3900</td>
                                                        </tr>
                                                        <tr>
                                                            <td>100</td>
                                                            <td>24 September, 2018</td>
                                                            <td>284 (*Federal Skilled Trades candidates only)</td>
                                                            <td>400</td>
                                                        </tr>
                                                        <tr>
                                                            <td>99</td>
                                                            <td>19 September, 2018</td>
                                                            <td>441</td>
                                                            <td>3,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>98</td>
                                                            <td>5 September, 2018</td>
                                                            <td>440</td>
                                                            <td>3,900</td>
                                                        </tr>
                                                        <tr>
                                                            <td>97</td>
                                                            <td>22 August, 2018</td>
                                                            <td>440</td>
                                                            <td>3,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>96</td>
                                                            <td>8 August, 2018</td>
                                                            <td>440</td>
                                                            <td>3,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>95</td>
                                                            <td>25 July, 2018</td>
                                                            <td>441</td>
                                                            <td>3,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>94</td>
                                                            <td>11 July, 2018</td>
                                                            <td>442</td>
                                                            <td>3,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>93</td>
                                                            <td>25 June, 2018</td>
                                                            <td>442</td>
                                                            <td>3,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>92</td>
                                                            <td>13 June, 2018</td>
                                                            <td>451</td>
                                                            <td>3,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>91</td>
                                                            <td>30 May, 2018</td>
                                                            <td>902 (*Provincial nominee programs only)<br>
                                                                288 (*Federal Skilled Trades candidates only)</td>
                                                            <td>700</td>
                                                        </tr>
                                                        <tr>
                                                            <td>90</td>
                                                            <td>23 May, 2018</td>
                                                            <td>440</td>
                                                            <td>3,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>89</td>
                                                            <td>9 May, 2018</td>
                                                            <td>441</td>
                                                            <td>3,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>88</td>
                                                            <td>25 April, 2018</td>
                                                            <td>441</td>
                                                            <td>3,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>87</td>
                                                            <td>11 April, 2018</td>
                                                            <td>444</td>
                                                            <td>3,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>86</td>
                                                            <td>26 March, 2018</td>
                                                            <td>446</td>
                                                            <td>3,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>85</td>
                                                            <td>14 March, 2018</td>
                                                            <td>456</td>
                                                            <td>3,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>84</td>
                                                            <td>21 February, 2018</td>
                                                            <td>442</td>
                                                            <td>3,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>83</td>
                                                            <td>7 February, 2018</td>
                                                            <td>442</td>
                                                            <td>3,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>82</td>
                                                            <td>24 January, 2018</td>
                                                            <td>444</td>
                                                            <td>2,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>81</td>
                                                            <td>10 January, 2018</td>
                                                            <td>446</td>
                                                            <td>2,750</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion last-chiled">
                                        <div class="accrodion-title">
                                            <h4><span>!</span> Express-Entry-Draws-2017</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Draw No</th>
                                                            <th scope="col">Draw Date</th>
                                                            <th scope="col">CRS Cut Off</th>
                                                            <th scope="col">ITAs Issued</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>80</td>
                                                            <td>20 December, 2017</td>
                                                            <td>446</td>
                                                            <td>2,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>79</td>
                                                            <td>6 December, 2017</td>
                                                            <td>452</td>
                                                            <td>2,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>78</td>
                                                            <td>15 November, 2017</td>
                                                            <td>439</td>
                                                            <td>2,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>77</td>
                                                            <td>8 November, 2017</td>
                                                            <td>458</td>
                                                            <td>2,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>76</td>
                                                            <td>November 1, 2017</td>
                                                            <td>241 (*Federal Skilled Trades candidates only)</td>
                                                            <td>505</td>
                                                        </tr>
                                                        <tr>
                                                            <td>75</td>
                                                            <td>November 1, 2017</td>
                                                            <td>673 (*Provincial nominee programs only)</td>
                                                            <td>290</td>
                                                        </tr>
                                                        <tr>
                                                            <td>74</td>
                                                            <td>18 October, 2017</td>
                                                            <td>436</td>
                                                            <td>2,757</td>
                                                        </tr>
                                                        <tr>
                                                            <td>73</td>
                                                            <td>4 October, 2017</td>
                                                            <td>438</td>
                                                            <td>2,801</td>
                                                        </tr>
                                                        <tr>
                                                            <td>72</td>
                                                            <td>20 September, 2017</td>
                                                            <td>433</td>
                                                            <td>2,871</td>
                                                        </tr>
                                                        <tr>
                                                            <td>71</td>
                                                            <td>6 September, 2017</td>
                                                            <td>435</td>
                                                            <td>2,772</td>
                                                        </tr>
                                                        <tr>
                                                            <td>70</td>
                                                            <td>23 August, 2017</td>
                                                            <td>434</td>
                                                            <td>3,035</td>
                                                        </tr>
                                                        <tr>
                                                            <td>69</td>
                                                            <td>9 August, 2017</td>
                                                            <td>433</td>
                                                            <td>2,991</td>
                                                        </tr>
                                                        <tr>
                                                            <td>68</td>
                                                            <td>2 August, 2017</td>
                                                            <td>441</td>
                                                            <td>3,264</td>
                                                        </tr>
                                                        <tr>
                                                            <td>67</td>
                                                            <td>12 July, 2017</td>
                                                            <td>440</td>
                                                            <td>3,202</td>
                                                        </tr>
                                                        <tr>
                                                            <td>66</td>
                                                            <td>28 June, 2017</td>
                                                            <td>449</td>
                                                            <td>3,409</td>
                                                        </tr>
                                                        <tr>
                                                            <td>65</td>
                                                            <td>31 May, 2017</td>
                                                            <td>413</td>
                                                            <td>3,877</td>
                                                        </tr>
                                                        <tr>
                                                            <td>64</td>
                                                            <td>26 May, 2017</td>
                                                            <td>199 (*Federal Skilled Trades candidates only)</td>
                                                            <td>400</td>
                                                        </tr>
                                                        <tr>
                                                            <td>63</td>
                                                            <td>26 May, 2017</td>
                                                            <td>775 (*Provincial nominee programs only)</td>
                                                            <td>143</td>
                                                        </tr>
                                                        <tr>
                                                            <td>62</td>
                                                            <td>17 May, 2017</td>
                                                            <td>415</td>
                                                            <td>3,687</td>
                                                        </tr>
                                                        <tr>
                                                            <td>61</td>
                                                            <td>4 May, 2017</td>
                                                            <td>423</td>
                                                            <td>3,796</td>
                                                        </tr>
                                                        <tr>
                                                            <td>60</td>
                                                            <td>19 April, 2017</td>
                                                            <td>415</td>
                                                            <td>3,665</td>
                                                        </tr>
                                                        <tr>
                                                            <td>59</td>
                                                            <td>12 April, 2017</td>
                                                            <td>423</td>
                                                            <td>3,923</td>
                                                        </tr>
                                                        <tr>
                                                            <td>58</td>
                                                            <td>5 April, 2017</td>
                                                            <td>431</td>
                                                            <td>3,753</td>
                                                        </tr>
                                                        <tr>
                                                            <td>57</td>
                                                            <td>24 March, 2017</td>
                                                            <td>441</td>
                                                            <td>3,749</td>
                                                        </tr>
                                                        <tr>
                                                            <td>56</td>
                                                            <td>1 March, 2017</td>
                                                            <td>434</td>
                                                            <td>3,884</td>
                                                        </tr>
                                                        <tr>
                                                            <td>55</td>
                                                            <td>22 February, 2017</td>
                                                            <td>441</td>
                                                            <td>3,611</td>
                                                        </tr>
                                                        <tr>
                                                            <td>54</td>
                                                            <td>8 February, 2017</td>
                                                            <td>447</td>
                                                            <td>3,664</td>
                                                        </tr>
                                                        <tr>
                                                            <td>53</td>
                                                            <td>25 January, 2017</td>
                                                            <td>453</td>
                                                            <td>3,508</td>
                                                        </tr>
                                                        <tr>
                                                            <td>52</td>
                                                            <td>11 January, 2017</td>
                                                            <td>459</td>
                                                            <td>3,334</td>
                                                        </tr>
                                                        <tr>
                                                            <td>51</td>
                                                            <td>4 January, 2017</td>
                                                            <td>468</td>
                                                            <td>2,902</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion last-chiled">
                                        <div class="accrodion-title">
                                            <h4><span>!</span> Express-Entry-Draws-2016</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Draw No</th>
                                                            <th scope="col">Draw Date</th>
                                                            <th scope="col">CRS Cut Off</th>
                                                            <th scope="col">ITAs Issued</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>50</td>
                                                            <td>22 December, 2016</td>
                                                            <td>475</td>
                                                            <td>2,878</td>
                                                        </tr>
                                                        <tr>
                                                            <td>49</td>
                                                            <td>16 December, 2016</td>
                                                            <td>497</td>
                                                            <td>1,936</td>
                                                        </tr>
                                                        <tr>
                                                            <td>48</td>
                                                            <td>30 November, 2016</td>
                                                            <td>786 (*Provincial Nominee Programs only)</td>
                                                            <td>559</td>
                                                        </tr>
                                                        <tr>
                                                            <td>47</td>
                                                            <td>16 November, 2016</td>
                                                            <td>470</td>
                                                            <td>2,427</td>
                                                        </tr>
                                                        <tr>
                                                            <td>46</td>
                                                            <td>2 November, 2016</td>
                                                            <td>472</td>
                                                            <td>2,080</td>
                                                        </tr>
                                                        <tr>
                                                            <td>45</td>
                                                            <td>19 October, 2016</td>
                                                            <td>475</td>
                                                            <td>1,804</td>
                                                        </tr>
                                                        <tr>
                                                            <td>44</td>
                                                            <td>12 October, 2016</td>
                                                            <td>484</td>
                                                            <td>1,518</td>
                                                        </tr>
                                                        <tr>
                                                            <td>43</td>
                                                            <td>21 September, 2016</td>
                                                            <td>483</td>
                                                            <td>1,288</td>
                                                        </tr>
                                                        <tr>
                                                            <td>42</td>
                                                            <td>7 September, 2016</td>
                                                            <td>491</td>
                                                            <td>1,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>41</td>
                                                            <td>24 August, 2016</td>
                                                            <td>538</td>
                                                            <td>750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>40</td>
                                                            <td>10 August, 2016</td>
                                                            <td>490</td>
                                                            <td>754</td>
                                                        </tr>
                                                        <tr>
                                                            <td>39</td>
                                                            <td>27 July, 2016</td>
                                                            <td>488</td>
                                                            <td>755</td>
                                                        </tr>
                                                        <tr>
                                                            <td>38</td>
                                                            <td>13 July, 2016</td>
                                                            <td>482</td>
                                                            <td>747</td>
                                                        </tr>
                                                        <tr>
                                                            <td>37</td>
                                                            <td>29 June, 2016</td>
                                                            <td>482</td>
                                                            <td>773</td>
                                                        </tr>
                                                        <tr>
                                                            <td>36</td>
                                                            <td>15 June, 2016</td>
                                                            <td>488</td>
                                                            <td>752</td>
                                                        </tr>
                                                        <tr>
                                                            <td>35</td>
                                                            <td>1 June, 2016</td>
                                                            <td>483</td>
                                                            <td>762</td>
                                                        </tr>
                                                        <tr>
                                                            <td>34</td>
                                                            <td>18 May, 2016</td>
                                                            <td>484</td>
                                                            <td>763</td>
                                                        </tr>
                                                        <tr>
                                                            <td>33</td>
                                                            <td>6 May, 2016</td>
                                                            <td>534</td>
                                                            <td>799</td>
                                                        </tr>
                                                        <tr>
                                                            <td>32</td>
                                                            <td>20 April, 2016</td>
                                                            <td>468</td>
                                                            <td>1,018</td>
                                                        </tr>
                                                        <tr>
                                                            <td>31</td>
                                                            <td>6 April, 2016</td>
                                                            <td>470</td>
                                                            <td>954</td>
                                                        </tr>
                                                        <tr>
                                                            <td>30</td>
                                                            <td>23 March, 2016</td>
                                                            <td>470</td>
                                                            <td>1,014</td>
                                                        </tr>
                                                        <tr>
                                                            <td>29</td>
                                                            <td>9 March, 2016</td>
                                                            <td>473</td>
                                                            <td>1,013</td>
                                                        </tr>
                                                        <tr>
                                                            <td>28</td>
                                                            <td>24 February, 2016</td>
                                                            <td>453</td>
                                                            <td>1,484</td>
                                                        </tr>
                                                        <tr>
                                                            <td>27</td>
                                                            <td>10 February, 2016</td>
                                                            <td>459</td>
                                                            <td>1,505</td>
                                                        </tr>
                                                        <tr>
                                                            <td>26</td>
                                                            <td>24 January, 2016</td>
                                                            <td>457</td>
                                                            <td>1,468</td>
                                                        </tr>
                                                        <tr>
                                                            <td>25</td>
                                                            <td>13 January, 2016</td>
                                                            <td>453</td>
                                                            <td>1,518</td>
                                                        </tr>
                                                        <tr>
                                                            <td>24</td>
                                                            <td>6 January, 2016</td>
                                                            <td>461</td>
                                                            <td>1,463</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion last-chiled">
                                        <div class="accrodion-title">
                                            <h4><span>!</span> Express-Entry-Draws-2015</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Draw No</th>
                                                            <th scope="col">Draw Date</th>
                                                            <th scope="col">CRS Cut Off</th>
                                                            <th scope="col">ITAs Issued</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>23</td>
                                                            <td>18 December, 2015</td>
                                                            <td>460</td>
                                                            <td>1,503</td>
                                                        </tr>
                                                        <tr>
                                                            <td>22</td>
                                                            <td>4 December, 2015</td>
                                                            <td>461</td>
                                                            <td>1,451</td>
                                                        </tr>
                                                        <tr>
                                                            <td>21</td>
                                                            <td>27 November, 2015</td>
                                                            <td>472</td>
                                                            <td>1,559</td>
                                                        </tr>
                                                        <tr>
                                                            <td>20</td>
                                                            <td>13 November, 2015</td>
                                                            <td>484</td>
                                                            <td>1,506</td>
                                                        </tr>
                                                        <tr>
                                                            <td>19</td>
                                                            <td>23 October, 2015</td>
                                                            <td>489</td>
                                                            <td>1,502</td>
                                                        </tr>
                                                        <tr>
                                                            <td>18</td>
                                                            <td>2 October, 2015</td>
                                                            <td>450</td>
                                                            <td>1,530</td>
                                                        </tr>
                                                        <tr>
                                                            <td>17</td>
                                                            <td>18 September, 2015</td>
                                                            <td>450</td>
                                                            <td>1,545</td>
                                                        </tr>
                                                        <tr>
                                                            <td>16</td>
                                                            <td>8 September, 2015</td>
                                                            <td>459</td>
                                                            <td>1,517</td>
                                                        </tr>
                                                        <tr>
                                                            <td>15</td>
                                                            <td>21 August, 2015</td>
                                                            <td>456</td>
                                                            <td>1,523</td>
                                                        </tr>
                                                        <tr>
                                                            <td>14</td>
                                                            <td>7 August, 2015</td>
                                                            <td>471</td>
                                                            <td>1,402</td>
                                                        </tr>
                                                        <tr>
                                                            <td>13</td>
                                                            <td>17 July, 2015</td>
                                                            <td>451</td>
                                                            <td>1,581</td>
                                                        </tr>
                                                        <tr>
                                                            <td>12</td>
                                                            <td>10 July, 2015</td>
                                                            <td>463</td>
                                                            <td>1,516</td>
                                                        </tr>
                                                        <tr>
                                                            <td>11</td>
                                                            <td>26 June, 2015</td>
                                                            <td>469</td>
                                                            <td>1,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>10</td>
                                                            <td>17 June, 2015</td>
                                                            <td>482</td>
                                                            <td>1,501</td>
                                                        </tr>
                                                        <tr>
                                                            <td>9</td>
                                                            <td>22 May, 2014</td>
                                                            <td>755</td>
                                                            <td>1,361</td>
                                                        </tr>
                                                        <tr>
                                                            <td>8</td>
                                                            <td>17 April, 2015</td>
                                                            <td>453</td>
                                                            <td>715</td>
                                                        </tr>
                                                        <tr>
                                                            <td>7</td>
                                                            <td>11 April, 2015</td>
                                                            <td>469</td>
                                                            <td>925</td>
                                                        </tr>
                                                        <tr>
                                                            <td>6</td>
                                                            <td>27 March, 2015</td>
                                                            <td>453</td>
                                                            <td>1,637</td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>20 March, 2015</td>
                                                            <td>481</td>
                                                            <td>1,620</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>27 Feb, 2015</td>
                                                            <td>735</td>
                                                            <td>1,187</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>20 Feb, 2015</td>
                                                            <td>808 (*Canadian Experience Class only)</td>
                                                            <td>849</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>7 Feb, 2015</td>
                                                            <td>818</td>
                                                            <td>779</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>31 Jan, 2015</td>
                                                            <td>886</td>
                                                            <td>779</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <?php include 'sidebar.php';?>
                    </div>
                </div>
            </div>

        </section>
        <!--News Details End-->

        <?php include 'partner.php';?>
        <?php include 'footer.php';?>

    </div><!-- /.page-wrapper -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fas fa-plane"></i></a>

    <script src="/assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="/assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="/assets/vendors/odometer/odometer.min.js"></script>
    <script src="/assets/vendors/swiper/swiper.min.js"></script>
    <script src="/assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="/assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="/assets/vendors/wow/wow.js"></script>
    <script src="/assets/vendors/isotope/isotope.js"></script>
    <script src="/assets/vendors/countdown/countdown.min.js"></script>
    <script src="/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="/assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="/assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="/assets/vendors/vegas/vegas.min.js"></script>
    <script src="/assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="/assets/vendors/timepicker/timePicker.js"></script>
    <script src="/assets/vendors/circleType/jquery.circleType.js"></script>
    <script src="/assets/vendors/circleType/jquery.lettering.min.js"></script>
    <script src="/assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>



    <!-- template js -->
    <script src="/assets/js/insur.js"></script>
    <script src="/assets/js/country.js"></script>
</body>

</html>