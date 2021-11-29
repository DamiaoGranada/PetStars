@extends('master')

@section('title', 'Perguntas Frequentes')

@section('content')
<body>
<link rel="stylesheet" href="{{asset('css/faq.css')}}">

 <!-- ======= F.A.Q ======= -->
 <section id="faq" class="faq">
        <div class="container">

            <div class="section-title">
                <h2>Perguntas Frequentes</h2>
                <br>
            </div>

            <ul class="faq-list">

                <li>
                    <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Adoções <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            A PetStars tem animais para adoção que se encontram a viver nas instalações da associação e tem animais em famílias de acolhimento temporário.
                            <br> As adoções têm que ser pensadas com calma e com responsabilidade. Um animal não é um brinquedo descartável.
                            <br> A PetStars tem algumas regras, nomeadamente:
                            <br><br>
                            <ul>
                                <li>
                                    O possível adotante tem que vir conhecer a associação e os nossos patudos.
                                </li>
                                <li>
                                    Depois, deve passear o animal em questão, ou vários para decidir com qual se relaciona melhor.
                                </li>
                                <li>
                                    Criados os laços e decidido o animal a adotar, os voluntários irão conhecer o futuro lar do patudo e verificar as condições de alojamento e manutenção do animal.
                                </li>
                                <li>
                                    No momento da entrega do patudo, o adotante tem que preencher o termo de responsabilidade para “Adoção de animais de companhia”.
                                </li>
                                <li>
                                    O animal adotado ficará à experiência cerca de 1 a 2 semanas e serão trocados feedbacks entre a associação e os futuros adotantes. Após esse tempo e consolidada a adoção, é feita a transferência de nome no chip.
                                </li>
                            </ul>
                        </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Recolher um animal em risco <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Se encontrou um animal abandonado deve contactar o Centro de Recolha Oficial (CRO) do Município em que se encontra o animal. Os CRO têm a responsabilidade legal de recolher, prestar cuidados médico-veterinários, desparasitar, esterilizar, albergar e alimentar
                            o animal, até este ser adotado.
                            <br> Não desista de contactar as autoridades competentes: você pode ser a única esperança para salvar a vida desse animal!
                        </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">
                        O que se deve fazer ao presenciar maus-tratos a um animal? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Os maus tratos a animais são punidos pela Lei n.º 8/2017, publicada no Diário da República a 3 de março de 2017. É fundamental denunciar situações de abandono, maus tratos, negligência ou risco.
                            <br> Sempre que conhecer ou testemunhar alguma destas situações, saiba que compete às autoridades garantir que não aconteçam, assegurando a fiscalização e o cumprimento das normas legais vigentes de protecção dos animais.
                            <br>Se conhecer algum caso em que algum animal esteja a ser mantido de forma que lhe seja prejudicial num qualquer espaço, ou que não esteja a receber os cuidados elementares para que o seu bem-estar seja garantido, ou que
                            tenha sido abandonado (e em que possua elementos acerca de quem o abandonou e das circunstâncias em que foi abandonado), ou que tenha sido ou esteja a ser vítima de maus-tratos por parte de alguém (seja o detentor do animal
                            ou não), proceda da seguinte maneira:
                            <br><br>
                            <ul>
                                <li>
                                    Em casos urgentes, peça a presença e assistência imediata da autoridade policial da área (PSP ou GNR).
                                </li>
                                <li>
                                    Se o caso for grave mas se não for necessário pedir a colaboração imediata da autoridade policial no local, opte por ligar directamente para a esquadra da Polícia Municipal (se existir na área), da PSP ou posto da GNR da área, explicando a situação e
                                    pedindo à autoridade policial que compareça no local e que proceda de acordo com o que a lei prevê para o caso específico denunciado.
                                </li>
                                <li>
                                    As autoridades policiais podem também pedir a colaboração do Médico Veterinário Municipal, da Direcção Regional de Agricultura da área (autoridade veterinária regional) ou da Direcção Geral de Veterinária (autoridade veterinária nacional).
                                </li>
                            </ul>
                            <br> Qualquer destas autoridades pode receber directamente uma queixa, embora seja sempre aconselhável apresentar queixas às autoridades policiais e veterinárias locais.
                        </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Como contactar as autoridades para denunciar maus-tratos ou ajudar animais em risco? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            A PSP criou o email <a href="mailto:defesanimal@psp.pt">efesanimal@psp.pt</a> para denúncias de maus tratos a animais.
                            <br> As denúncias à PSP podem também ser feitas para o número de telefone 217 654 242.
                            <br> A GNR criou o SEPNA - Serviço da Protecção da Natureza e do Ambiente, um serviço através do qual se pode contactar directamente as autoridades que poderão agir em casos de abandono, maus tratos ou outros flagelos contra
                            os animais ou a natureza.
                            <br> Podem ser efectuadas denúncias por <a href="mailto:sepna@gnr.pt.">email</a>
                            <br> Através deste <a href=" https://www.gnr.pt/ambiente.aspx ">formulário online</a>
                            <br> Através do atendimento telefónico SOS Ambiente e Território, disponível 24 horas por dia durante todo o ano: 808 200 520
                            <br> No posto de GNR mais próximo ou através dos contactos
                            <a href="https://www.gnr.pt/contactos.aspx ">listados</a>
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- ======= END F.A.Q ======= -->

</body>

@endsection