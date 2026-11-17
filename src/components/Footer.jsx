import React, { Component } from 'react';

export default class Footer extends Component {
  render() {
    const currentYear = new Date().getFullYear();

    return (
      <footer className="bg-[#8A9165] text-white py-[50px] px-[20px] lg:py-[80px] lg:px-0 text-center lg:text-left mt-auto">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-[5rem]">
            {/* KOLOM 1 */}
            <div className="mb-4 lg:mb-0">
              <div className="flex items-center justify-center lg:justify-start mb-4">
                <img
                  src="/assets/logoputih.png"
                  alt="Logo"
                  width="45"
                  className="mr-3"
                />
                <div className="text-[1.8rem] font-extrabold tracking-[1px] uppercase">
                  INÍCIO STUDIO
                </div>
              </div>
              <p className="text-[0.95rem] leading-[1.6] text-center lg:text-justify mb-[30px] lg:mb-0">
                <strong>INICIO Studio</strong> adalah sebuah creative agency yang
                berfokus pada desain brand. Kami membantu bisnis baik yang baru
                memulai maupun yang sudah berjalan untuk membangun identitas
                visual dan branding yang profesional, efektif, dan mudah
                dikenali.
              </p>
            </div>

            {/* KOLOM 2 */}
            <div className="mb-4 lg:mb-0">
              <div className="mt-0 lg:mt-[72px]">
                <p className="text-[0.95rem] leading-[1.6] text-center lg:text-justify mb-[30px] lg:mb-0">
                  <strong>INICIO Studio</strong> hadir sebagai solusi bagi
                  mereka yang belum memahami dunia branding atau tidak memiliki
                  waktu untuk mengurus desain, namun ingin mengembangkan bisnis
                  yang terlihat lebih profesional dan memiliki citra kuat di
                  mata pelanggan.
                </p>
              </div>
            </div>

            {/* KOLOM 3 */}
            <div>
              <div className="mt-0 lg:mt-[72px]">
                <ul className="list-none p-0 m-0">
                  <li className="mb-[12px] flex items-center justify-center lg:justify-start text-[0.95rem]">
                    <i className="bi bi-envelope-fill text-[1.2rem] w-[35px] text-left" />
                    <a
                      href="https://mail.google.com/mail/?view=cm&fs=1&to=iniciostudioid@gmail.com"
                      target="_blank"
                      rel="noreferrer"
                      className="text-white no-underline hover:underline"
                    >
                      inicio.studioid@gmail.com
                    </a>
                  </li>
                  <li className="mb-[12px] flex items-center justify-center lg:justify-start text-[0.95rem]">
                    <i className="bi bi-whatsapp text-[1.2rem] w-[35px] text-left" />
                    <a
                      href="https://wa.me/6285103726662"
                      target="_blank"
                      rel="noreferrer"
                      className="text-white no-underline hover:underline"
                    >
                      (+62) 85103726662
                    </a>
                  </li>
                  <li className="mb-[12px] flex items-center justify-center lg:justify-start text-[0.95rem]">
                    <i className="bi bi-instagram text-[1.2rem] w-[35px] text-left" />
                    <a
                      href="https://www.instagram.com/iniciostudio.id/"
                      target="_blank"
                      rel="noreferrer"
                      className="text-white no-underline hover:underline"
                    >
                      iniciostudio.id
                    </a>
                  </li>
                  <li className="mb-[12px] flex items-center justify-center lg:justify-start text-[0.95rem]">
                    <i className="bi bi-linkedin text-[1.2rem] w-[35px] text-left" />
                    <a
                      href="https://www.linkedin.com/in/inicio-studio-a086b5325/?skipRedirect=true"
                      target="_blank"
                      rel="noreferrer"
                      className="text-white no-underline hover:underline"
                    >
                      Inicio Studio
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <hr
            className="my-6 border-0 border-t"
            style={{ borderColor: 'rgba(255, 255, 255, 0.2)' }}
          />
          <div className="text-center">
            <p className="mb-0 text-[0.9rem] opacity-80">
              &copy; {currentYear} INÍCIO STUDIO. All rights reserved.
            </p>
          </div>
        </div>
      </footer>
    );
  }
}