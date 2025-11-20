import React from 'react';
import { ScrollView, Dimensions } from 'react-native';
import HTML from 'react-native-render-html';
import * as Constant from '../../constants/GlobalConstants';

const HtmlRender = ({ htmlContent }) => {
  const tagsStyles = {
    p: {
      fontSize: 16,
      lineHeight: 24,
      color: "#000",
      fontWeight: "400",
      marginVertical: 10,
    },
    li: {
      fontSize: 16,
      lineHeight: 24,
      color: "#000",
      marginVertical: 5,
      fontWeight: "400",

    }
  };

  return (
    <ScrollView contentContainerStyle={{ padding: 16 }}>
      <HTML
        contentWidth={Dimensions.get('window').width}
        source={{ html: htmlContent }}
        tagsStyles={tagsStyles}
        systemFonts={[Constant.primaryFontBold]}

      />
    </ScrollView>
  );
};

export default HtmlRender;
