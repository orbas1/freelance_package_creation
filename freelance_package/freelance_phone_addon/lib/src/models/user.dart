import 'package:equatable/equatable.dart';

class UserProfile extends Equatable {
  const UserProfile({
    required this.id,
    required this.name,
    this.avatar,
    this.userType,
    this.location,
    this.rating,
    this.ratingCount,
  });

  final int id;
  final String name;
  final String? avatar;
  final String? userType;
  final String? location;
  final double? rating;
  final int? ratingCount;

  factory UserProfile.fromJson(Map<String, dynamic>? json) {
    if (json == null) {
      return const UserProfile(id: 0, name: '');
    }
    return UserProfile(
      id: json['id'] is int ? json['id'] : int.tryParse(json['id'].toString()) ?? 0,
      name: json['name']?.toString() ?? json['auther']?.toString() ?? '',
      avatar: json['avatar']?.toString() ?? json['user_avatar']?.toString(),
      userType: json['user_type']?.toString(),
      location: json['address']?.toString() ?? json['location']?.toString(),
      rating: json['rating'] is num
          ? (json['rating'] as num).toDouble()
          : double.tryParse(json['rating']?.toString() ?? ''),
      ratingCount: json['ratings_count'] is int
          ? json['ratings_count']
          : int.tryParse(json['ratings_count']?.toString() ?? ''),
    );
  }

  Map<String, dynamic> toJson() => {
        'id': id,
        'name': name,
        'avatar': avatar,
        'user_type': userType,
        'address': location,
        'rating': rating,
        'ratings_count': ratingCount,
      };

  @override
  List<Object?> get props => [id, name, avatar, userType, location, rating, ratingCount];
}
