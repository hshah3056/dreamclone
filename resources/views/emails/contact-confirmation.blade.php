<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquiry Received</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f3f4f6; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;">
    <table width="100%" border="0" cellpadding="0" cellspacing="0" style="background-color: #f3f4f6; padding: 30px 10px;">
        <tr>
            <td align="center">
                <table width="600" border="0" cellpadding="0" cellspacing="0" style="background-color: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                    <tr>
                        <td style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); padding: 40px; text-align: center;">
                            <h2 style="color: #ffffff; margin: 0; font-size: 26px; font-weight: 700;">Dreamclone</h2>
                            <p style="color: #38bdf8; margin: 8px 0 0 0; font-size: 14px; font-weight: 500; text-transform: uppercase; letter-spacing: 1.5px;">Message Received</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 40px; text-align: left;">
                            <h3 style="color: #0f172a; font-size: 18px; margin-top: 0;">Dear {{ $formData['name'] }},</h3>
                            <p style="color: #475569; font-size: 15px; line-height: 1.6;">
                                Thank you for getting in touch with Dreamclone. This is to confirm that we have successfully received your message regarding: <strong>"{{ $formData['subject'] }}"</strong>.
                            </p>
                            <p style="color: #475569; font-size: 15px; line-height: 1.6;">
                                Our support and engineering team is currently evaluating your inquiry. We understand the importance of your request and will connect with you via email or phone within 24 business hours.
                            </p>
                            <div style="background-color: #f8fafc; border-left: 4px solid #38bdf8; padding: 15px 20px; margin: 25px 0; border-radius: 0 8px 8px 0;">
                                <p style="margin:0; color: #1e293b; font-size: 14px; font-weight: 600;">Need immediate assistance?</p>
                                <p style="margin:5px 0 0 0; color: #475569; font-size: 13px; line-height: 1.5;">You can always reach our team directly at <a href="tel:+917383181131" style="color:#2563eb; text-decoration:none; font-weight:600;">+91 7383181131</a> for any urgent matters.</p>
                            </div>
                            <p style="color: #475569; font-size: 15px; line-height: 1.6; margin-top: 30px; margin-bottom: 0;">
                                Best Regards,<br>
                                <strong>Dreamclone Team</strong>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color: #f8fafc; padding: 25px 40px; text-align: center; border-top: 1px solid #f1f5f9; color: #94a3b8; font-size: 12px;">
                            &copy; {{ date('Y') }} Dreamclone. All rights reserved.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
