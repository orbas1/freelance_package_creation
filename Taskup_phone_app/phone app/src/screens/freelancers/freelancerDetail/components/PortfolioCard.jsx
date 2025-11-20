import React, { useState } from 'react';
import { View, Text, ImageBackground, FlatList, TouchableOpacity, Linking } from 'react-native';
import Styles from '../../../../styles/Styles';
import Feather from 'react-native-vector-icons/Feather';
import Video from 'react-native-video';

const PortfolioCard = ({ portfolioData }) => {
  const VideoItem = ({ item }) => {
    const [paused, setPaused] = useState(true);

    return (
      <View style={[Styles.portfolioContainer]}>
        <TouchableOpacity
          style={{ position: 'relative' }}
          onPress={() => setPaused(!paused)}
        >
          <Video
            source={{ uri: item.attachments[0].file_path }}
            style={{
              height: 150,
              width: 'auto',
              borderRadius: 15,
            }}
            paused={paused}
          />
          {paused && (
            <View style={{
              position: 'absolute',
              top: 0,
              left: 0,
              right: 0,
              bottom: 0,
              justifyContent: 'center',
              alignItems: 'center',
              backgroundColor: 'rgba(0, 0, 0, 0.3)',
            }}>
              <Feather name="play-circle" size={50} color="#fff" />
            </View>
          )}
        </TouchableOpacity>
        <View style={[Styles.portfolioLinkContainer]}>
          <Text style={[Styles.infoText, { color: "#051237" }]}>Network Security</Text>
          <Feather name="external-link" size={18} color="#05123760" onPress={() => Linking.openURL(item.url)} />
        </View>
      </View>
    );
  };

  const DocumentItem = ({ item }) => (
    <View style={[Styles.portfolioContainer]}>
      <ImageBackground
        imageStyle={{ borderRadius: 15 }}
        source={{ uri: item.attachments[0].file_path }}
        style={{
          height: 150,
          width: 'auto',
          borderRadius: 15,
        }}>
        <View style={{
          position: 'absolute',
          top: 13,
          right: 5,
          borderRadius: 6,
          backgroundColor: "#fff",
          height: 34,
          width: "15%",
          alignItems: "center",
          justifyContent: "center",
        }}>
          <Feather name="download" size={18} color="#2e90fa" />
        </View>
      </ImageBackground>
      <View style={[Styles.portfolioLinkContainer]}>
        <Text style={[Styles.infoText, { color: "#051237" }]} onPress={() => Linking.openURL(item.url)}>Network Security</Text>
        <Feather name="external-link" size={18} color="#05123760" />
      </View>
    </View>
  );

  const ImageItem = ({ item }) => (
    <View style={[Styles.portfolioContainer]}>
      <ImageBackground
        imageStyle={{ borderRadius: 15 }}
        source={{ uri: item?.attachments[0].file_path }}
        style={{
          height: 150,
          width: 'auto',
          borderRadius: 15,
        }}></ImageBackground>
      <View style={[Styles.portfolioLinkContainer]}>
        <Text style={[Styles.infoText, { color: "#3366CC", textDecorationLine: 'underline' }]} onPress={() => Linking.openURL(item.url)}>{item?.url}</Text>
        <Feather name="external-link" size={18} color="#3366CC" onPress={() => Linking.openURL(item.url)} />
      </View>
    </View>
  );

  const renderItem = ({ item }) => {
    if (item.attachments[0].file_path.endsWith('.mp4')) {
      return <VideoItem item={item} />;
    } else if (item.attachments[0].file_path.endsWith('.pdf')) {
      return <DocumentItem item={item} />;
    } else {
      return <ImageItem item={item} />;
    }
  };
  return (
    <FlatList
      data={portfolioData}
      horizontal
      renderItem={renderItem}
      keyExtractor={item => item.id.toString()}
      showsHorizontalScrollIndicator={false}
      style={{ marginBottom: 20 }}
    />
  );
};

export default PortfolioCard;