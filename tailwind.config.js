module.exports = {
    theme: {
        colors: {
            primary: '#F44A53',
            secondary: '#3A3853',
            white: '#FFFFFF',
            gray: '#F3F3F3',
            success: '#8BC34A',
            error: '#ff6363',
        },
        fontFamily: {
            body: ['Roboto','sans-serif'],
            heading: ['Archivo', 'sans-serif']
        },
        fontSize: {
            'sm': '0.875rem',
            'base': '1rem',
            'lg': '1.125rem', //18px
            'xl': '1.5rem', //24px
            '2xl': '2rem', //32px,
            '3xl': '2.25rem', //36px,
            '4xl': '4rem', //64px,
            '5xl': '4.75rem' //76px
        }
    },
    variants: {
        textSizes: ['responsive']
    },
    corePlugins: {
        container: false
      },
      plugins: [
        function ({ addComponents }) {
          addComponents({
            '.container': {
              maxWidth: '100%',
              '@screen sm': {
                maxWidth: '640px',
              },
              '@screen md': {
                maxWidth: '768px',
              },
              '@screen lg': {
                maxWidth: '1024px',
              }
            }
          })
        }
      ]
}