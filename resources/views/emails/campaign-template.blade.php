<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clone the Extraordinary - Dreamclone Softech</title>
    <!-- Google Web Fonts for modern look -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');
        
        /* Responsive CSS Rules */
        @media only screen and (max-width: 620px) {
            .email-container {
                width: 100% !important;
                max-width: 100% !important;
            }
            .grid-column {
                width: 100% !important;
                display: block !important;
                margin-bottom: 20px !important;
            }
            .grid-column-last {
                width: 100% !important;
                display: block !important;
                margin-bottom: 0 !important;
            }
            .spacer-col {
                display: none !important;
            }
            .footer-col {
                width: 100% !important;
                display: block !important;
                text-align: center !important;
                margin-bottom: 25px !important;
            }
            .footer-col-last {
                width: 100% !important;
                display: block !important;
                margin-bottom: 0 !important;
            }
            .footer-contact-table {
                margin: 0 auto !important;
            }
            .content-padding {
                padding: 30px 20px !important;
            }
            .header-padding {
                padding: 30px 20px !important;
            }
            .cta-padding {
                padding: 30px 20px !important;
            }
            .hero-title {
                font-size: 26px !important;
                line-height: 1.3 !important;
            }
        }
    </style>
</head>
<body style="margin: 0; padding: 0; background-color: #f4f7fa; font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; -webkit-font-smoothing: antialiased;">
    <table width="100%" border="0" cellpadding="0" cellspacing="0" style="background-color: #f4f7fa; padding: 40px 0;">
        <tr>
            <td align="center">
                <!-- Main Card Container -->
                <table class="email-container" width="600" border="0" cellpadding="0" cellspacing="0" style="background-color: #ffffff; border-radius: 20px; overflow: hidden; box-shadow: 0 12px 35px rgba(4, 112, 182, 0.06); border: 1px solid #e1ebf6;">
                    
                    <!-- Header with Big Colored Logo (White Background) -->
                    <tr>
                        <td class="header-padding" style="background-color: #ffffff; padding: 0px 40px; text-align: center; border-bottom: 4px solid #0470b6;">
                            @if(isset($message))
                                <img src="{{ $message->embed(public_path('assets/img/logo.png')) }}" alt="Dreamclone Logo" width="30%">
                            @else
                                <img src="{{ asset('assets/img/logo.png') }}" alt="Dreamclone Logo" width="30%">
                            @endif
                        </td>
                    </tr>

                    <!-- Premium Hero Section -->
                    <tr>
                        <td class="content-padding" style="padding: 45px 40px 20px 40px; text-align: center;">
                            <p style="color: #0470b6; font-size: 12px; font-weight: 800; letter-spacing: 2px; text-transform: uppercase; margin: 0 0 15px 0; font-family: 'Plus Jakarta Sans', sans-serif;">Premium Software Engineering</p>
                            <h2 class="hero-title" style="color: #09132e; font-size: 30px; font-weight: 800; line-height: 1.35; margin: 0 0 16px 0; font-family: 'Plus Jakarta Sans', sans-serif; letter-spacing: -0.5px;">
                                Software Engineered to <br><span style="color: #0470b6;">Clone the Extraordinary</span>
                            </h2>
                            <p style="color: #475569; font-size: 15px; line-height: 1.7; margin: 0 auto; max-width: 480px; font-family: 'Plus Jakarta Sans', sans-serif;">
                                Dreamclone is a premier custom software engineering agency. We design and build high-performance custom web systems, scalable SaaS applications, and intelligent workflow automation to accelerate your growth.
                            </p>
                        </td>
                    </tr>

                    <!-- Concept-Based Custom Software Development GIF -->
                    <tr>
                        <td align="center" style="padding: 0 40px 35px 40px;">
                            <div style="border-radius: 16px; overflow: hidden; box-shadow: 0 10px 25px rgba(4, 112, 182, 0.08); border: 1px solid #e2e8f0; max-width: 480px; background-color: #f8fafc; padding: 12px;">
                                <img src="{{asset('assets/img/ss.gif')}}" alt="Premium Custom Software Development Architecture" style="width: 100%; height: auto; display: block; border-radius: 8px;" />
                            </div>
                        </td>
                    </tr>

                    <!-- Elegant Divider -->
                    <tr>
                        <td style="padding: 0 40px;">
                            <div style="height: 1px; background: linear-gradient(to right, rgba(4, 112, 182, 0) 0%, rgba(4, 112, 182, 0.25) 50%, rgba(4, 112, 182, 0) 100%);"></div>
                        </td>
                    </tr>

                    <!-- Core Capabilities Section -->
                    <tr>
                        <td class="content-padding" style="padding: 35px 40px 20px 40px;">
                            <h3 style="color: #0470b6; font-size: 14px; font-weight: 800; text-align: center; margin: 0 0 25px 0; text-transform: uppercase; letter-spacing: 2px; font-family: 'Plus Jakarta Sans', sans-serif;">
                                Technical Expertise & Solutions
                            </h3>
                            
                            <!-- Services Grid -->
                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <!-- Column 1: Custom CRMs -->
                                    <td class="grid-column" width="48%" valign="top" style="background-color: #ffffff; padding: 24px; border-radius: 18px; border: 1px solid #e2e8f0; border-top: 3px solid #0470b6; box-shadow: 0 4px 10px rgba(4, 112, 182, 0.01);">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td valign="middle" align="center" style="background: rgba(4, 112, 182, 0.08); width: 36px; height: 36px; border-radius: 10px; font-size: 14px; font-weight: 800; color: #0470b6; line-height: 36px; font-family: 'Plus Jakarta Sans', sans-serif;">
                                                    01
                                                </td>
                                                <td style="padding-left: 12px; color: #09132e; font-size: 15px; font-weight: 700; font-family: 'Plus Jakarta Sans', sans-serif;" valign="middle">
                                                    Custom CRMs
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="padding-top: 12px; color: #475569; font-size: 13.5px; line-height: 1.6; font-family: 'Plus Jakarta Sans', sans-serif;">
                                                    Bespoke management portals built to mirror your workflow, optimize agent speed, and centralize operations.
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <!-- Spacer -->
                                    <td class="spacer-col" width="4%"></td>
                                    <!-- Column 2: SaaS Architecture -->
                                    <td class="grid-column-last" width="48%" valign="top" style="background-color: #ffffff; padding: 24px; border-radius: 18px; border: 1px solid #e2e8f0; border-top: 3px solid #00a2e8; box-shadow: 0 4px 10px rgba(4, 112, 182, 0.01);">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td valign="middle" align="center" style="background: rgba(0, 162, 232, 0.08); width: 36px; height: 36px; border-radius: 10px; font-size: 14px; font-weight: 800; color: #00a2e8; line-height: 36px; font-family: 'Plus Jakarta Sans', sans-serif;">
                                                    02
                                                </td>
                                                <td style="padding-left: 12px; color: #09132e; font-size: 15px; font-weight: 700; font-family: 'Plus Jakarta Sans', sans-serif;" valign="middle">
                                                    SaaS Architecture
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="padding-top: 12px; color: #475569; font-size: 13.5px; line-height: 1.6; font-family: 'Plus Jakarta Sans', sans-serif;">
                                                    Multi-tenant database structures, robust API architectures, and seamless subscription billing systems.
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" height="16" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <!-- Column 3: Advanced Web Systems -->
                                    <td class="grid-column" width="48%" valign="top" style="background-color: #ffffff; padding: 24px; border-radius: 18px; border: 1px solid #e2e8f0; border-top: 3px solid #0470b6; box-shadow: 0 4px 10px rgba(4, 112, 182, 0.01);">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td valign="middle" align="center" style="background: rgba(4, 112, 182, 0.08); width: 36px; height: 36px; border-radius: 10px; font-size: 14px; font-weight: 800; color: #0470b6; line-height: 36px; font-family: 'Plus Jakarta Sans', sans-serif;">
                                                    03
                                                </td>
                                                <td style="padding-left: 12px; color: #09132e; font-size: 15px; font-weight: 700; font-family: 'Plus Jakarta Sans', sans-serif;" valign="middle">
                                                    Web Systems
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="padding-top: 12px; color: #475569; font-size: 13.5px; line-height: 1.6; font-family: 'Plus Jakarta Sans', sans-serif;">
                                                    High-speed web platforms engineered with cutting-edge tech stacks for optimal response times and UX.
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <!-- Spacer -->
                                    <td class="spacer-col" width="4%"></td>
                                    <!-- Column 4: Custom E-commerce -->
                                    <td class="grid-column-last" width="48%" valign="top" style="background-color: #ffffff; padding: 24px; border-radius: 18px; border: 1px solid #e2e8f0; border-top: 3px solid #00a2e8; box-shadow: 0 4px 10px rgba(4, 112, 182, 0.01);">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td valign="middle" align="center" style="background: rgba(0, 162, 232, 0.08); width: 36px; height: 36px; border-radius: 10px; font-size: 14px; font-weight: 800; color: #00a2e8; line-height: 36px; font-family: 'Plus Jakarta Sans', sans-serif;">
                                                    04
                                                </td>
                                                <td style="padding-left: 12px; color: #09132e; font-size: 15px; font-weight: 700; font-family: 'Plus Jakarta Sans', sans-serif;" valign="middle">
                                                    E-commerce
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="padding-top: 12px; color: #475569; font-size: 13.5px; line-height: 1.6; font-family: 'Plus Jakarta Sans', sans-serif;">
                                                    Fully integrated shopping systems, custom shopping carts, and optimized, conversion-ready checkouts.
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Premium CTA Block (Vibrant Blue/Cyan Gradient Container) -->
                    <tr>
                        <td class="content-padding" style="padding: 20px 40px 45px 40px; text-align: center;">
                            <div class="cta-padding" style="background: linear-gradient(135deg, #0470b6 0%, #00a2e8 100%); border-radius: 16px; padding: 35px; text-align: center; box-shadow: 0 10px 30px rgba(4, 112, 182, 0.25);">
                                <h4 style="color: #ffffff; font-size: 20px; font-weight: 800; margin: 0 0 10px 0; font-family: 'Plus Jakarta Sans', sans-serif;">
                                    ⚡ Build the Future with Dreamclone
                                </h4>
                                <p style="color: #e0f2fe; font-size: 14px; line-height: 1.6; margin: 0 0 25px 0; font-family: 'Plus Jakarta Sans', sans-serif; max-width: 440px; display: inline-block;">
                                    We align our elite engineering teams directly with your product roadmap. Get production-ready code, strict testing, and scalable architecture.
                                </p>
                                <table border="0" cellspacing="0" cellpadding="0" align="center">
                                    <tr>
                                        <td align="center" style="border-radius: 12px; background-color: #ffffff; box-shadow: 0 4px 15px rgba(255, 255, 255, 0.2);">
                                            <a href="https://dreamclone.in/service" target="_blank" style="font-size: 14px; font-family: 'Plus Jakarta Sans', sans-serif; font-weight: bold; color: #0470b6; text-decoration: none; border-radius: 12px; padding: 14px 36px; display: inline-block; text-transform: uppercase; letter-spacing: 0.5px;">Explore Services</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                    </tr>

                    <!-- Footer with Radiant Gradient and Professional Side-by-Side Grid -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #0470b6 0%, #00a2e8 100%); padding: 50px 40px; border-top: 4px solid #0d5784;">
                            <!-- Centered Contact Info Layout -->
                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td align="center" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                                        
                                        <table border="0" cellpadding="0" cellspacing="0" style="margin: 0 auto; margin-bottom: 25px;">
                                            <tr>
                                                <td align="center" style="padding-bottom: 12px; color: #e0f2fe; font-size: 14px; line-height: 1.6; font-weight: 500;">
                                                    <img src="https://img.icons8.com/ios-filled/50/ffffff/marker.png" alt="Address" style="height: 16px; width: 16px; vertical-align: text-bottom; margin-right: 6px; opacity: 0.9;">
                                                    Sundaram Icon, Vaikunth crossing, Waghodia road, Vadodara, 390019
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" style="padding-bottom: 10px; color: #e0f2fe; font-size: 13px; line-height: 1.6; font-weight: 500;">
                                                    <img src="https://img.icons8.com/ios-filled/50/ffffff/new-post.png" alt="Email" style="height: 16px; width: 16px; vertical-align: text-bottom; margin-right: 4px; opacity: 0.9;">
                                                    <a href="mailto:dreamclone2501@gmail.com" style="color: #e0f2fe; text-decoration: none;">dreamclone2501@gmail.com</a>
                                                    &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                                                    <img src="https://img.icons8.com/ios-filled/50/ffffff/phone.png" alt="Phone" style="height: 16px; width: 16px; vertical-align: text-bottom; margin-right: 4px; opacity: 0.9;">
                                                    <a href="tel:+918160945573" style="color: #e0f2fe; text-decoration: none;">+91 8160945573</a>
                                                    &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                                                    <img src="https://img.icons8.com/ios-filled/50/ffffff/domain.png" alt="Website" style="height: 16px; width: 16px; vertical-align: text-bottom; margin-right: 4px; opacity: 0.9;">
                                                    <a href="https://dreamclone.in" style="color: #e0f2fe; text-decoration: none;">dreamclone.in</a>
                                                </td>
                                            </tr>
                                        </table>
                                        
                                        <!-- Social Icons Centered -->
                                        <table border="0" cellpadding="0" cellspacing="0" style="margin: 0 auto;">
                                            <tr>
                                                <td style="padding: 0 10px;">
                                                    <a href="https://wa.me/918160945573" style="text-decoration: none; display: inline-block; background-color: rgba(255,255,255,0.15); border-radius: 50%; padding: 10px; transition: background-color 0.3s;">
                                                        <img src="https://img.icons8.com/ios-filled/50/ffffff/whatsapp--v1.png" alt="WhatsApp" style="height: 18px; width: 18px; display: block;">
                                                    </a>
                                                </td>
                                                <td style="padding: 0 10px;">
                                                    <a href="https://dreamclone.in" style="text-decoration: none; display: inline-block; background-color: rgba(255,255,255,0.15); border-radius: 50%; padding: 10px; transition: background-color 0.3s;">
                                                        <img src="https://img.icons8.com/ios-filled/50/ffffff/domain.png" alt="Website" style="height: 18px; width: 18px; display: block;">
                                                    </a>
                                                </td>
                                                <td style="padding: 0 10px;">
                                                    <a href="#" style="text-decoration: none; display: inline-block; background-color: rgba(255,255,255,0.15); border-radius: 50%; padding: 10px; transition: background-color 0.3s;">
                                                        <img src="https://img.icons8.com/ios-filled/50/ffffff/facebook-new.png" alt="Facebook" style="height: 18px; width: 18px; display: block;">
                                                    </a>
                                                </td>
                                                <td style="padding: 0 10px;">
                                                    <a href="#" style="text-decoration: none; display: inline-block; background-color: rgba(255,255,255,0.15); border-radius: 50%; padding: 10px; transition: background-color 0.3s;">
                                                        <img src="https://img.icons8.com/ios-filled/50/ffffff/twitter.png" alt="Twitter" style="height: 18px; width: 18px; display: block;">
                                                    </a>
                                                </td>
                                                <td style="padding: 0 10px;">
                                                    <a href="https://www.instagram.com/dreamclone_softech?igsh=MXZkMjU0Nnp5a25kYQ==" style="text-decoration: none; display: inline-block; background-color: rgba(255,255,255,0.15); border-radius: 50%; padding: 10px; transition: background-color 0.3s;">
                                                        <img src="https://img.icons8.com/ios-filled/50/ffffff/instagram-new.png" alt="Instagram" style="height: 18px; width: 18px; display: block;">
                                                    </a>
                                                </td>
                                                <td style="padding: 0 10px;">
                                                    <a href="#" style="text-decoration: none; display: inline-block; background-color: rgba(255,255,255,0.15); border-radius: 50%; padding: 10px; transition: background-color 0.3s;">
                                                        <img src="https://img.icons8.com/ios-filled/50/ffffff/linkedin.png" alt="LinkedIn" style="height: 18px; width: 18px; display: block;">
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>

                                    </td>
                                </tr>
                            </table>
                            
                            <!-- Bottom Copyright Block -->
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" style="margin-top: 35px; border-top: 1px solid rgba(255, 255, 255, 0.2); padding-top: 25px;">
                                <tr>
                                    <td align="center">
                                        <p style="color: #ffffff; font-size: 12px; margin: 0; line-height: 1.6; opacity: 0.7; font-family: 'Plus Jakarta Sans', sans-serif; text-align: center;">
                                            &copy; {{ date('Y') }} Dreamclone Softech. All rights reserved.<br>
                                            You received this email because you initiated a demonstration request on our website.
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
