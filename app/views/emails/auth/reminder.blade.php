<tr>
    <td style="width: 100%; padding: 5% 15% 10%;">


        <table style="width: 100%;">
            <tr>
                <td style="background-color: #f4f4f4; padding: 10px 20px 20px">
                    <p style="font-size: 12px;">
                        Has recibido este e-mail porque se ha solicitado el cambio de contraseña de acceso de tu
                        usuario de SurSideStory. Si quieres cambiar la contraseña, por favor pulsa en el siguiente
                        enlace:</p>

                    <p style="text-align: center;"><a
                                href="{{URL::to('password/reset', array($token))}}">{{ URL::to('password/reset', array($token))}}</a>
                    </p>

                    <p style="font-size: 12px;">Si el link no funciona, copia y pega la dirección completa en el
                        navegador.
                        <br> Si no has solicitado el cambio ignora este e-mail ya que el link caducará en {{ Config::get('auth.reminder.expire', 60) }}
                        minutos.

                    </p>
                </td>
            </tr>

            <table style="width: 100%;">
                <tr>
                    <td>
                        <p>Si tienes alguna duda o comentario, consulta nuestras <a
                                    href="http://sursidestory.com/FAQ" target="_self"
                                    style="font-weight: 600;">FAQs</a> o envíanos un email a <a
                                    href="mailto:infopeluqueriacortex@gmail.com" style="font-weight: 600;">infopeluqueriacortex@gmail.com</a>
                        </p>

                        <p>Muchas gracias.
                            <br> <strong>Corte'x</strong>
                        </p>

                    </td>
                </tr>
            </table>

        </table>

    </td>
</tr>