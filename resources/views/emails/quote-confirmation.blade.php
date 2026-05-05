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
                            <h2 style="color: #ffffff; margin: 0; font-size: 26px; font-weight: 700; letter-spacing: -0.5px;">Dreamclone</h2>
                            <p style="color: #38bdf8; margin: 8px 0 0 0; font-size: 14px; font-weight: 500; text-transform: uppercase; letter-spacing: 1.5px;">Inquiry Confirmed</p>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 40px; text-align: left;">
                            <h3 style="color: #0f172a; font-size: 18px; margin-top: 0; font-weight: 600;">Hi {{ $formData['name'] }},</h3>

                            <p style="color: #475569; font-size: 15px; line-height: 1.6; margin-bottom: 20px;">
                                Thank you for reaching out to Dreamclone! We have successfully received your project inquiry and our technical team is already looking over the details.
                            </p>

                            <div style="background-color: #f8fafc; border-radius: 12px; padding: 25px; margin: 25px 0;">
                                <h4 style="margin: 0 0 15px 0; color: #1e293b; font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;">What happens next?</h4>

                                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td valign="top" style="width: 25px; color: #38bdf8; font-weight: bold; font-size: 16px;">1.</td>
                                        <td style="color: #475569; font-size: 14px; line-height: 1.5; padding-bottom: 12px;">
                                            <strong>Technical Review:</strong> We analyze your requirements for the <strong>{{ $formData['service'] }}</strong> platform.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top" style="width: 25px; color: #38bdf8; font-weight: bold; font-size: 16px;">2.</td>
                                        <td style="color: #475569; font-size: 14px; line-height: 1.5; padding-bottom: 12px;">
                                            <strong>Estimation:</strong> We prepare a customized proposal aligned with your budget.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top" style="width: 25px; color: #38bdf8; font-weight: bold; font-size: 16px;">3.</td>
                                        <td style="color: #475569; font-size: 14px; line-height: 1.5;">
                                            <strong>Get in Touch:</strong> An engineer will reach out to you within 24 business hours.
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <p style="color: #475569; font-size: 15px; line-height: 1.6;">
                                If you need to add any additional files or details in the meantime, feel free to reply directly to this email.
                            </p>

                            <p style="color: #475569; font-size: 15px; line-height: 1.6; margin-top: 30px; margin-bottom: 0;">
                                Best Regards,<br>
                                <strong>The Dreamclone Team</strong>
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <td style="background-color: #f8fafc; padding: 25px 40px; text-align: center; border-top: 1px solid #f1f5f9;">
                            <p style="color: #94a3b8; font-size: 12px; margin: 0;">
                                You are receiving this automated email because a request was submitted using your email address on our website.
                            </p>
                            <p style="color: #94a3b8; font-size: 12px; margin: 5px 0 0 0;">
                                &copy; {{ date('Y') }} Dreamclone. All rights reserved.
                            </p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>
</html>
